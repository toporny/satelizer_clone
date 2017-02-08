<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Firebase\JWT\JWT;
use App\User;
use App\Library\myFunctions;
use DB;

class UserController extends Controller {

    private $laravel_config;

    public function __CONSTRUCT() {
        $this->laravel_config = new \App\Http\library\myFunctions;
    }
    
// http://ieltsadvantage.com/2015/04/08/25-free-online-language-learning-tools/ 

    /**
     * Generate JSON Web Token.
     */
    protected function createToken($user)
    {
        $payload = [
            'sub' => $user->id,
            'iat' => time(),
            // 'exp' => time() + (2 * 7 * 24 * 60 * 60)   // two weeks valid
            'exp' => time() + (1 * 1 * 24 * 60 * 60)  // one one day valid
        ];
        return JWT::encode($payload, Config::get('app.token_secret'));
    }




    /**
     * Get signed in user's profile.
     */
    public function getUser(Request $request)
    {
        $user = User::find($request['user']['sub']);

        if ((isset($user)) && (!isset($user->locale)) ) {
            $user->locale = 'en_EN';
        }
        return $user;
    }




    /**
     * remember Unknown Words
     */
    public function rememberUnknownWords(Request $request)
    {
        $user = User::find($request['user']['sub']);

        if (!isset($user)) {
            return response('user is not logged in!', 500);
        }

        $user_id = $user->id;

        $language_id = $request->input('language_id');
        if (!$language_id) {
            return response('language_id is not defined', 500);
        }

        if (!is_int($user_id)) {
            return response('problem with getting user_id', 500);
        }

        $to_add = $request->input('to_add');
        $to_remove = $request->input('to_remove');

        // TODO: move it to external function getNameOfUnknownWordsTable 
        // ($user->id >= 1000) ? $dictTableIndex = (substr("$user->id", -4, 1)) : $dictTableIndex = 0;
        // $unknown_words_table = 'unknown_words_'.$dictTableIndex .'k';

        $unknown_words_table = $this->laravel_config->getNameOfUnknownWordsTable($user_id); 

        if (isset($to_remove) && count($to_remove)>0) {
            DB::table($unknown_words_table)
                ->where('user_id', $user_id)
                ->where('language_id', $language_id)
                ->whereIn('word_id', $to_remove)
                ->delete();
        }

        $add_array = array();
        foreach ($to_add as $key => $item) {
            if ($item > 0) {
                array_push ($add_array, [
                    'user_id' => $user_id,
                    'language_id' => $language_id,
                    'word_id' => $item,
                    'status' => 3, // 321 how users remembers 3-don't remember, 0-remember well
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    ]);
            }
        }
        DB::table($unknown_words_table)->insert($add_array);

        return response()->json(['status'=> 1]);
    }




    /**
     * set Stage
     */
    public function addLevelProgress(Request $request)
    {
        $user = User::find($request['user']['sub']);

        if (!isset($user)) {
            return response('user is not logged in!', 500);
        }

        $user_id = $user->id;
        if (!is_int($user_id)) {
            return response('problem with getting user_id', 500);
        }

        $language_id = $request->input('language_id');
        if (!$language_id) {
            return response('language_id is not set', 500);
        }

        $stage_finished = $request->input('stage_finished');
        if (!$stage_finished) {
            return response('stage_finished is not set', 500);
        }


        $array  = [
            'user_id' => $user_id,
            'language_id' => $language_id,
            'stage_finished' => $stage_finished
        ];

        DB::table('users_level_progress')->insert($array);

        return response()->json(['status'=> 1]);

    }

   /**
     * get Stages
     */
    public function getLevelProgress(Request $request, $language_id)
    {
        $user = User::find($request['user']['sub']);

        if (!isset($user)) {
            return response('user is not logged in!', 500);
        }

        $user_id = $user->id;
        if (!is_int($user_id)) {
            return response('problem with getting user_id', 500);
        }
        
        print "not yet ready";

        // DB::table('users_level_progress')
        //     ->where('user_id', $user_id)
        //     ->where('language_id', $language_id)
        //     ->delete();
    }


   /**
     * delete Stage
     */
    public function removeLevelProgress(Request $request)
    {
        $user = User::find($request['user']['sub']);

        if (!isset($user)) {
            return response('user is not logged in!', 500);
        }

        $user_id = $user->id;
        if (!is_int($user_id)) {
            return response('problem with getting user_id', 500);
        }

        $language_id = $request->input('language_id');
        if (!$language_id) {
            return response('language_id is not set', 500);
        }

        $stage_finished = $request->input('stage_finished');
        if (!$stage_finished) {
            return response('stage_finished is not set', 500);
        }


        DB::table('users_level_progress')
            ->where('user_id', $user_id)
            ->where('language_id', $language_id)
            ->where('stage_finished', $stage_finished)
            ->delete();

       return response()->json(['status'=> 1]);

    }











    public function getUnknownsForUser(Request $request, $language, $state_name)
    {
        //http://localhost:8000/api/get_words_with_translations_for_user/en_EN?page=2
        $records_on_page = $this->getMaxPaginateForState($state_name);

        $this->dictTable = $this->laravel_config->getDictTable($language);
        if ($this->dictTable === false) return response('problem with getting dictTable', 500);

        $this->language_id = $this->laravel_config->getLanguageId($language);
        if ($this->language_id === false) return response('problem with getting language_id', 500);

        $user = User::find($request['user']['sub']);

        if (isset($user)) {

            $this->unknown_words_table = $this->laravel_config->getNameOfUnknownWordsTable($user->id); 

            $transactions = DB::table('dictionary_en')
                ->join($this->unknown_words_table, $this->dictTable.'.id', '=', $this->unknown_words_table.'.word_id')
                ->select($this->dictTable.'.word') 
                ->where($this->unknown_words_table.'.user_id', '=', $user->id)
                ->orderBy($this->dictTable.'.id', 'asc');

            $transactions = $transactions->paginate($records_on_page);

            // $transactions = $transactions->paginate($records_on_page);
            return response()->json(['status'=> 1, 'words' =>  $transactions ]);

        }
        else {
            return response('this feature is not yet ready for anonymous user.', 500);
        }        
    }



    /*
    * get words with translations for user
    */

    public function getWordsWithTranslationsForUser(Request $request, $language, $state_name)
    {
        //http://localhost:8000/api/get_words_with_translations_for_user/en_EN?page=2
        $records_on_page = $this->getMaxPaginateForState($state_name);

        $this->dictTable = $this->laravel_config->getDictTable($language);
        if ($this->dictTable === false) return response('problem with getting dictTable', 500);

        $this->language_id = $this->laravel_config->getLanguageId($language);
        if ($this->language_id === false) return response('problem with getting language_id', 500);


        $user = User::find($request['user']['sub']);

        if (isset($user)) {

            // TODO: move it to external function getNameOfUnknownWordsTable 
            // ($user->id >= 1000) ? $dictTableIndex = (substr("$user->id", -4, 1)) : $dictTableIndex = 0;
            // $this->unknown_words_table  = 'unknown_words_'.$dictTableIndex .'k';
            $this->unknown_words_table = $this->laravel_config->getNameOfUnknownWordsTable($user->id);

            // SELECT dictionary_en.id as word_id, dictionary_en.word, pl_PL_translations as translations
            // FROM dictionary_en, unknown_words_0k
            // WHERE unknown_words_0k.user_id = 8
            // AND unknown_words_0k.word_id = dictionary_en.id
            $transactions = DB::table('dictionary_en')
                ->join($this->unknown_words_table, $this->dictTable.'.id', '=', $this->unknown_words_table.'.word_id')
                ->select($this->dictTable.'.word', $this->dictTable.'.pl_PL_translations') // TODO: make pl_PL_translations dynamic 
                ->where($this->unknown_words_table.'.user_id', '=', $user->id)
                ->orderBy($this->dictTable.'.id', 'asc');

            $transactions = $transactions->paginate($records_on_page);

            // $transactions = $transactions->paginate($records_on_page);
            return response()->json(['status'=> 1, 'words' =>  $transactions ]);

        }
        else {
            return response('this feature is not yet ready for anonymous user.', 500);
        }

    }



    private function getMaxPaginateForState($state_name) {

        switch($state_name) {
            case "learn_get_unknowns_with_translations_for_user":
                return  20;
            break;
            case "pick_get_list_of_words":
                return Config::get('app.records_on_page');
            break;
            case "learn_get_unknowns_for_user":
                return 8;
            break;


            default:
                //return 3;
                return false;            
            break;
        }
    }


    /**
     * Get Words pagination list from "dictionary_**" table 
     */

    private $language_id = null;
    private $unknown_words_table = null;

    public function getListOfWordsWithUnknowns(Request $request, $language, $state_name)
    {
        $records_on_page = $this->getMaxPaginateForState($state_name);
        if ($records_on_page == false) return response('problem with getListOfWordsWithUnknowns/$state_name_and_page', 500);

        $this->dictTable = $this->laravel_config->getDictTable($language);
        if ($this->dictTable === false) return response('problem with getting dictTable', 500);

        $this->language_id = $this->laravel_config->getLanguageId($language);
        if ($this->language_id === false) return response('problem with getting language_id', 500);

        $user = User::find($request['user']['sub']);

        if (isset($user)) {

            $this->unknown_words_table = $this->laravel_config->getNameOfUnknownWordsTable($user->id); 

            // MADNESS !
            $transactions = DB::table($this->dictTable)
                ->leftJoin($this->unknown_words_table , function ($join) {
                    $join->on($this->dictTable.'.id', '=', $this->unknown_words_table.'.word_id')
                         ->on($this->unknown_words_table.'.language_id' , "=", $this->language_id);
                })
                ->select( $this->dictTable.'.id', $this->dictTable.'.word', $this->unknown_words_table.'.status')
                ->orderBy($this->dictTable.'.id', 'asc');

            $transactions = $transactions->paginate($records_on_page);
            return response()->json(['status'=> 1, 'words' =>  $transactions ]);

        }
        else {
            $transactions = DB::table($this->dictTable)->select( 'id', 'word' )->orderby('id');
            $transactions = $transactions->paginate($records_on_page);
            $transactions->each(function($value) {
                $value->{"status"} = null;
                return $value;
            });
            return response()->json(['status'=> 1, 'words' =>  $transactions ]);
        }
    }


    /**
     * Update signed in user's profile.
     */
    public function updateUser(Request $request)
    {

        $user = User::find($request['user']['sub']);
        $tmp = json_encode ( $request->input('locale') );
        $user->locale = json_decode($tmp)->id;
        $user->languageToLearn = $request->input('languageToLearn')['id'];
        $user->displayName = $request->input('displayName');
        $user->email = $request->input('email');

        $user->save();

        $token = $this->createToken($user);

        $return = response()->json(['token' => $token]);
        return $return;
    }


    /**
     * Generate config files
     * http://localhost:8000/api/generate_config_files
     */
    public function generateConfigFiles(Request $request)
    {
        // generate two config files
        //$laravel_config = new \App\Http\library\myFunctions;
        // $tmp = $laravel_config->getLanguageId('pl_PL');
        // print $tmp;
        // exit;
        $return = $this->laravel_config->generateConfigFiles();

        if ($return) {
            return response()->json(['status' => 1]);
        }
        else 
        {
            return response('problem with generation config files', 500);
        }

    }




}
