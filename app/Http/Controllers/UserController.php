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
}
