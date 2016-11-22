<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Firebase\JWT\JWT;
use App\User;
use DB;

class UserController extends Controller {

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

        if (!isset($user->locale)) {
            $user->locale = 'en_EN';
        }
        return $user;
    }



    /**
     * Get Words pagination list from dictionary table 
     */
    public function getListOfWords($language_and_page)
    {
        $records_on_page = 500;
        $transactions = DB::table('dictionary_en')->select( 'id', 'word' )->orderby('id');
        $transactions = $transactions->paginate($records_on_page);

        return response()->json(['status'=> 1, 'words' =>  $transactions ]);
    }



    /**
     * get dictionaries and levels (for pick words #/pick)
     * input: language
     * API_COMMAND:  api/get_dictionaries_and_levels/'     
     */
    public function getDictionariesAndLevels(Request $request)
    {
        // TODO: this function uses the same part of code like getDictionaries

        $user = User::find($request['user']['sub']);

        $tmp = 0;
        foreach (Config::get('app.supported_languages') as $value) {
            if ($value == $user['locale'])  $tmp = 1;
        }

        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'count_words', 'available_languages')
                ->get();

        $usersLevelProgress = DB::table('users_level_progress')
                ->select('available_dictionaries.language_id', 'levels_progress')
                ->join('available_dictionaries', 'available_dictionaries.id', '=', 'users_level_progress.dictionary_id')
                ->where('user_id', $request['user']['sub'])
                ->get();

        if ($results) {
            $return = [
                'status'=> 1,
                'languages' => $results,
                'levels' => $usersLevelProgress
            ];

            return response()->json($return);
        }
        else {
            return response('problem with getting data from /get_dictionaries_and_levels/', 500);
        }
    }



    /**
     * get dictionaries
     * input: language
     * API_COMMAND:  api/get_dictionaries/'     
     */
    public function getDictionaries(Request $request)
    {
        // TODO: this function uses the same part of code like getDictionariesAndLevels

        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'count_words', 'available_languages')
                ->get();
        
        if ($results) {
            $return = [
                'status'=> 1,
                'languages' =>  $results
            ];

            return response()->json($return);
        }
        else {
            return response('problem with getting data from /available_dictionaries/', 500);
        }

    }


    /**
     * Update signed in user's profile.
     */
    public function updateUser(Request $request)
    {
        // PRINT_R($request['user']);
        // EXIT;
        $user = User::find($request['user']['sub']);
        $tmp = json_encode ( $request->input('locale') );
        $user->locale = json_decode($tmp)->id;
        $user->languageToLearn = $request->input('languageToLearn')['id'];
        $user->displayName = $request->input('displayName');
        $user->email = $request->input('email');

        $user->save();

        $token = $this->createToken($user);

        return response()->json(['token' => $token]);
    }


    /**
     * Update signed in user's profile.
     */
    public function generateConfigFiles(Request $request)
    {
        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'count_words', 'available_languages')
                ->get();

$string = '';
foreach ($results as $item) {
   // $tmp = addcslashes($item->available_languages);
   //'en_EN':{'count_words': '4586', 'language_name': 'english', 'available_languages': [{"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]},
$string .= "      '".$item->language_id."':{'count_words': '".$item->count_words."', 'language_name': '".$item->language_name."', 'available_languages':  ".$item->available_languages." },':\n";
//    "'".en_EN."'":{'count_words': '4586', 'language_name': 'english', 'available_languages': [{"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]},
}
            // [language_id] => en_EN
            // [language_name] => english
            // [count_words] => 4586
            // [available_languages] => [{"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]
 

$file1 = <<<END1
(function() {
    // this file is automaticaly generated everytime GET request for this url: /api/regenerate_config_files
    angular
    .module('MyApp')
    .constant('availableDictionaries', {

END1;
// 'en_EN':{'count_words': '4586', 'language_name': 'english', 'available_languages': [{"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]},
// 'es_ES':{'count_words': '5000', 'language_name': 'spanish', 'available_languages': [{"id":"en_EN", "name":"english"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]},
// 'ru_RU':{'count_words': '5500', 'language_name': 'russian', 'available_languages': [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]},
// 'fr_FR':{'count_words': '6000', 'language_name': 'french' , 'available_languages': [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]},
// 'de_DE':{'count_words': '6500', 'language_name': 'deutsch', 'available_languages': [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"pl_PL", "name":"polish"}]},
// 'pl_PL':{'count_words': '7000', 'language_name': 'polish' , 'available_languages': [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}]}

$file2 = <<<END2
    })
})();
END2;
//print "<pre>";
// print $file1 . $string . $file2;
// exit; 
        $return = file_put_contents(public_path().'/app/configs/generated_by_laravel.js', $file1 . $string . $file2);
        if ($return) {
            return response()->json(['status' => 1]);
        }
        else 
        {
            return response('problem with generation config files', 500);            
        }


    }




}
