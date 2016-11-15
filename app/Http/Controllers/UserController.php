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


        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'available_languages')
                ->where('language_id', $user['locale'])
                ->get();

// print "<pre>";
// print_r($results);
// exit;

        // SET LANGUAGETOLEARN ITEM IN THE FIRST PLACE
                
        $json_decoded = json_decode($results[0]->available_languages);

        // if user doesn't have languageToLearn defined THEN ignore 
        $baloon = false;
        foreach (array_keys($json_decoded) as $key) {
            if ($json_decoded[$key]->id == $user['languageToLearn']) {
                $tmp_id = $json_decoded[$key]->id;
                $tmp_name = $json_decoded[$key]->name;
                unset($json_decoded[$key]);
                $baloon = true;
            }
        }

        if ($baloon == true ) {
            $new_array = ['id'=>$tmp_id, 'name'=>$tmp_name]  ;
            array_push ($json_decoded , $new_array );
            $json_decoded = array_reverse ($json_decoded);
        }

        if ($json_decoded) {
            return response()->json(['status'=> 1, 'languages' =>  $json_decoded ]);
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
