<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Firebase\JWT\JWT;
use App\User;
use DB;

class UserController extends Controller {


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
     * Get signed in user's profile.
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

        if (isset($to_remove) && count($to_remove)>0) {
            DB::table('unknown_words_1k')
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
                    'status' => 3
                    ]);
            }
        }
// TODO: make unknown_words_1k DYNAMIC!
        DB::table('unknown_words_1k')->insert($add_array);

        return response()->json(['status'=> 1]);
    }


    /**
     * Get Words pagination list from "dictionary_**" table 
     * note: this function works with 'json array string' stored in "unknown_words" table
     * structure of this string s: 
     * [12,14,15,17,19,20,21,22,23,24,25,26,27,28,29, etc 
     */

    private $table = null;
    private $language_id = null;
    private $unknown_words_table = null;

    public function getListOfWordsWithUnknowns(Request $request, $language)
    {
		// TODO: move this to external function 
        switch($language) {
            case 'en_EN': $this->dictTable = 'dictionary_en'; $this->language_id = 1; break;
            case 'es_ES': $this->dictTable = 'dictionary_es'; $this->language_id = 2; break;
            case 'ru_RU': $this->dictTable = 'dictionary_ru'; $this->language_id = 3; break;
            case 'fr_FR': $this->dictTable = 'dictionary_fr'; $this->language_id = 4; break;
            case 'de_DE': $this->dictTable = 'dictionary_de'; $this->language_id = 5; break;
            case 'pl_PL': $this->dictTable = 'dictionary_pl'; $this->language_id = 6; break;
            default:
                return response('language not defined', 500);
            break;
        }

        $records_on_page = Config::get('app.records_on_page');

        $user = User::find($request['user']['sub']);

        if (isset($user)) {

            ($user->id >= 1000) ? $dictTableIndex = substr("$user->id", -4, 1) : $dictTableIndex = 1;
            $this->unknown_words_table  = 'unknown_words_'.$dictTableIndex .'k';
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
     * Update signed in user's profile.
     * http://localhost:3000/api/generate_config_files
     */
    public function generateConfigFiles(Request $request)
    {
        $results = DB::table('available_dictionaries')
                ->select('id','language_id', 'language_name', 'count_words', 'free_words_for_not_premium_users', 'available_languages')
                ->get();

        $string = '';
        foreach ($results as $item) {
        $string .= "      '".$item->language_id."':{'id': '".$item->id."','count_words': '".$item->count_words."', 'free_words_for_not_premium_users': '".$item->free_words_for_not_premium_users."', 'language_name': '".$item->language_name."', 'available_languages':  ".$item->available_languages." },\n";
        }
 

$file1 = <<<END1
(function() {
    // this file is automaticaly generated everytime GET request for this url:
    // http://localhost:3000/api/generate_config_files
    angular
    .module('MyApp')
    .constant('availableDictionaries', {

END1;

$file2 = <<<END2
    })

END2;
$file2 .= "    .constant('maxWordsPerPage', ".Config::get('app.records_on_page').")\n";
$file2 .= "    .constant('apiUrl', '".Config::get('app.apiUrl')."');\n";

$file3 = <<<END3

})();
END3;

        $return = file_put_contents(public_path().'/app/configs/generated_by_laravel.js', $file1 . $string . $file2. $file3);
        if ($return) {
            return response()->json(['status' => 1]);
        }
        else 
        {
            return response('problem with generation config files', 500);
        }


    }




}
