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
        $user_id = $user->id;

        $language_id = $request->input('language_id');
        if (!$language_id) {
            return response('language_id is not defined', 500);
        }

        if (!is_int($user_id)) {
            return response('problem with getting user_id', 500);
        }

        $list_of_ids_array = $request->input('list_of_ids');

        $remove_array = [];
        $add_array = [];
        foreach ($list_of_ids_array as $item) {
            if ($item < 0) array_push ($remove_array, -$item);
            if ($item > 0) {
                array_push ($add_array, [
                    'user_id' => $user_id,
                    'language_id' => $language_id,
                    'word_id' => $item,
                    'status' => 3,
                    ]);
            }
        }
        DB::table('unknown_words_1k')
            ->where('user_id', '=', $user_id)
            ->where('language_id', '=', $language_id)
            ->whereIn('word_id', $remove_array)
            ->delete();


        //DB::table('unknown_words_1k')->insert($add_array);


// User::where('votes', '>', 100)->delete();
        // if (count($remove_array)>0) {
        //     DB::table('unknown_words_1k')
        //         ->where('unknown_words_1k.user_id', '=', $user_id)
        //         ->where('available_dictionaries.id', '=', 'unknown_words_1k.language_id')
        //         ->where('available_dictionaries.language_id', '=', $language_id)
        //         ->whereIn('unknown_words_1k.id', $remove_array)
        //         ->delete();
        // }
        // print "<pre>";
        // print_r($user_id);
        // print_r($language_id);
        // print_r($remove_array);
        // exit;

/*
        $unknown_words_1k_data = array(
                ['id' => 1, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 12, 'status' => 1, 'created_at' => '2016-12-07 12:24:18'],
                ['id' => 2, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 14, 'status' => 2, 'created_at' => '2016-12-07 12:24:18'],
                ['id' => 3, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 16, 'status' => 3, 'created_at' => '2016-12-07 12:24:18'],
                ['id' => 4, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 18, 'status' => 0, 'created_at' => '2016-12-07 12:24:18'],
        );
            
        DB::table('unknown_words_1k')->insert($unknown_words_1k_data);

*/


        // print "<pre>";
        // print_r( $tmp);
        // exit;

        // remove from unknown_words_1k every ID with negative sign


        // add to unknown_words_1k every ID with negative sign


        // $user->locale = json_decode($tmp)->id;
        // $user->languageToLearn = $request->input('languageToLearn')['id'];
        // $user->displayName = $request->input('displayName');
        // $user->email = $request->input('email');

        // $user->save();

        // $token = $this->createToken($user);

        // $return = response()->json(['token' => $token]);
        // return $return;
    }





    // /**
    //  * Get Words pagination list from dictionary table 
    //  */
    // public function getListOfWords($language_and_page)
    // {
    //     $records_on_page = Config::get('app.records_on_page');
        
    //     $transactions = DB::table('dictionary_en')->select( 'id', 'word' )->orderby('id');
    //     $transactions = $transactions->paginate($records_on_page);

    //     return response()->json(['status'=> 1, 'words' =>  $transactions ]);
    // }

    /**
     * Get Words pagination list from "dictionary_**" table 
     * note: this function works with 'json array string' stored in "unknown_words" table
     * structure of this string s: 
     * [12,14,15,17,19,20,21,22,23,24,25,26,27,28,29, etc 
     */
    public function getListOfWordsWithUnknowns(Request $request, $language)
    {
		// TODO: move this to external function 
        switch($language) {
            case 'en_EN': $table = 'dictionary_en'; break;
            case 'es_ES': $table = 'dictionary_es'; break;
            case 'pl_PL': $table = 'dictionary_pl'; break;
            default: $table = 'dictionary_en';
        }

        $records_on_page = Config::get('app.records_on_page');


        $user = User::find($request['user']['sub']);

        if (isset($user)) {

            ($user->id >= 1000) ? $tableIndex = substr("$user->id", -4, 1) : $tableIndex = 1;
            $transactions = DB::table('dictionary_en')
                ->leftJoin('unknown_words_1k', $table.'.id', '=', 'unknown_words_'.$tableIndex.'k.word_id')
                ->select( $table.'.id', $table.'.word', 'unknown_words_'.$tableIndex.'k.status')
                ->orderBy($table.'.id', 'asc');

            $transactions = $transactions->paginate($records_on_page);
            return response()->json(['status'=> 1, 'words' =>  $transactions ]);

        }
        else {
            $transactions = DB::table($table)->select( 'id', 'word' )->orderby('id');
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
