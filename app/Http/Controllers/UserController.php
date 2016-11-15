<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Firebase\JWT\JWT;
use App\User;

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
        // print_r($user);
        // exit;
        // TODO: it should me taken from DB
        // now its hardcoded
        $return = array(
            array('id' => 'en_EN', 'name' => 'english'),
            array('id' => 'fr_FR', 'name' => 'french'),
            array('id' => 'de_DE', 'name' => 'deutsch'),
            array('id' => 'es_ES', 'name' => 'spanish'),
            array('id' => 'ru_RU', 'name' => 'russian'),
            array('id' => 'pl_PL', 'name' => 'polish')
        );

        // for ($i = 0; $i<count($return); $i++) {
        //     if ($locale ==  $return[$i]) {
        //         unset($return[$i]); // remove locale from the list.
        //        break;
        //     }
        // }

        // for ($i = 0; $i<count($return); $i++) {
        //     print_R( $languageToLearn_string);
        //     if ((array_key_exists($i, $return)) && ($languageToLearn ==  $return[$i]) ) {
        //         unset($return[$i]); // remove locale from the list.
        //         break;
        //     }   
        // }

        // make $languageToLearn to a first place
        return response()->json(['status'=> 1, 'languages' => array($languageToLearn)+$return]);

    }


    /**
     * Update signed in user's profile.
     */
    public function updateUser(Request $request)
    {
        $user = User::find($request['user']['sub']);
        $user->locale = json_encode ( $request->input('locale') );
        $user->languageToLearn = json_encode ( $request->input('languageToLearn') );
        $user->displayName =  $request->input('displayName');
        $user->email = $request->input('email');

        $user->save();

        $token = $this->createToken($user);

        return response()->json(['token' => $token]);
    }
}
