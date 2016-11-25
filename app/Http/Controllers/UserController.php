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

        if ((isset($user)) && (!isset($user->locale)) ) {
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

        return response()->json(['token' => $token]);
    }


    /**
     * Update signed in user's profile.
     * http://localhost:3000/api/generate_config_files
     */
    public function generateConfigFiles(Request $request)
    {
        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'count_words', 'free_words_for_not_premium_users', 'available_languages')
                ->get();

        $string = '';
        foreach ($results as $item) {
        $string .= "      '".$item->language_id."':{'count_words': '".$item->count_words."','free_words_for_not_premium_users': '".$item->free_words_for_not_premium_users."', 'language_name': '".$item->language_name."', 'available_languages':  ".$item->available_languages." },\n";
        }
 

$file1 = <<<END1
(function() {
    // this file is automaticaly generated everytime GET request for this url: /api/generate_config_files
    angular
    .module('MyApp')
    .constant('availableDictionaries', {

END1;

$file2 = <<<END2
    })
})();
END2;

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
