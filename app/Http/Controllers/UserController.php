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



    /**
     * Get Words pagination list from dictionary table 
     */
    public function getListOfWords($language_and_page)
    {
        $records_on_page = 100;
        $transactions = DB::table('dictionary_en')->select( 'id', 'word' )->orderby('id');
        $transactions = $transactions->paginate($records_on_page);

        return response()->json(['status'=> 1, 'words' =>  $transactions ]);
    }



    /**
     * get Dictionaries Alphabetically
     * input: language
     * API_COMMAND:  api/get_dictionaries_alphabeticaly/{language}'     
     */
    public function getDictionariesAlphabetically($language) {

        $tmp = 0;
        foreach (Config::get('app.supported_languages') as $value) {
            if ($value == $language)  $tmp = 1;
        }

        if ($tmp == 0) {
            return response('no available languages for '.$language, 500);            
        }

        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'available_languages')
                ->where('language_id', $language)
                ->get();


        if (count($results) == 0) {
            return response('problem with getting from DB or no available languages for '.$language, 500);
        }
        else {
            $json_decoded = json_decode($results[0]->available_languages);
            return response()->json(['status'=> 1, 'languages' =>  $json_decoded ]);
        }

    }



    /**
     * get dictionaries
     * input: language
     * API_COMMAND:  api/get_dictionaries/'     
     */
    public function getDictionaries(Request $request)
    {

        $user = User::find($request['user']['sub']);

        // if from some reason user doesn't have $locale set let $locale='en_EN' 
        $tmp = 0;
        foreach (Config::get('app.supported_languages') as $value) {
            if ($value == $user['locale'])  $tmp = 1;
        }

        if ($tmp == 0) {
            $user['locale'] = 'en_EN';
            // set in database locale 'en_EN'
            DB::table('users')
                ->where('id', $request['user']['sub'])
                ->update(['locale' => 'en_EN']);
        }
     
        $results = DB::table('available_dictionaries')
                ->select('language_id', 'language_name', 'available_languages')
                ->where('language_id', $user['locale'])
                ->get();

        // SET LANGUAGETOLEARN ITEM IN THE FIRST PLACE
                
        $json_decoded = json_decode($results[0]->available_languages);


        // if user has languageToLearn defined then set "prefer language' on the top of list
        // if user doesn't have languageToLearn defined THEN ignore 
        $tmp = false;
        foreach (array_keys($json_decoded) as $key) {
            if ($json_decoded[$key]->id == $user['languageToLearn']) {
                $tmp_id = $json_decoded[$key]->id;
                $tmp_name = $json_decoded[$key]->name;
                unset($json_decoded[$key]);
                $tmp = true;
            }
        }

        if ($tmp == true ) {
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
