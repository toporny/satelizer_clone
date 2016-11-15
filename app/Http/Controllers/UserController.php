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
            'exp' => time() + (2 * 7 * 24 * 60 * 60)
        ];
        return JWT::encode($payload, Config::get('app.token_secret'));
    }

    /**
     * Get signed in user's profile.
     */
    public function getUser(Request $request)
    {
        $user = User::find($request['user']['sub']);
        return $user;
    }


    public function getDictionaries(Request $request)
    {
        $user = User::find($request['user']['sub']);
        
        $languageToLearn_string = $user['languageToLearn'];
        $languageToLearn = json_decode ($languageToLearn_string, true);
        $locale = json_decode ($user['locale'], true);

        // $availableDictionaries = DB::table('available_dictionaries')
        // ->select( 'language_id', 'language_name')
        // ->select( 'language_id', 'language_name')
        // ;
 
        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'available_languages')
                ->where('language_id', $user['locale'])
                ->get();


        if ($results) {
            return response()->json(['status'=> 1, 'languages' => array($results)]);
        }
        else {
            return response('no available languages for '.$user['locale'], 500);
        }

    }


    /**
     * Update signed in user's profile.
     */
    public function updateUser(Request $request)
    {
        $user = User::find($request['user']['sub']);
        $tmp = json_encode ( $request->input('locale') );
        $user->locale =  json_decode($tmp)->id ;
        $user->languageToLearn = $request->input('languageToLearn')['id'];
        $user->displayName =  $request->input('displayName');
        $user->email = $request->input('email');

        $user->save();

        $token = $this->createToken($user);

        return response()->json(['token' => $token]);
    }
}
