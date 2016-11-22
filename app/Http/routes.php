<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// OAuth, Login and Signup Routes.
// Route::post('auth/twitter', 'AuthController@twitter');
//Route::post('auth/facebook', 'AuthController@facebook');
Route::post('auth/facebook', ['middleware' => 'cors', 'uses' => 'AuthController@facebook']);


// Response to preflight request doesn't pass access control check: No 'Access-Control-Allow-Origin'
// header is present on the requested resource.
// Origin 'http://localhost:8000' is therefore not allowed access.
// CORS is a solution.

//Route::post('auth/google', 'AuthController@google');
//Route::post('auth/google', 'AuthController@google');
Route::post('auth/google', ['middleware' => 'cors', 'uses' => 'AuthController@google']);
// Route::post('auth/foursquare', 'AuthController@foursquare');
// Route::post('auth/instagram', 'AuthController@instagram');
// Route::post('auth/github', 'AuthController@github');
// Route::post('auth/linkedin', 'AuthController@linkedin');

// Route::post('auth/login', 'AuthController@login');
Route::post('auth/login', ['middleware' => 'cors', 'uses' => 'AuthController@login']);


//Route::post('auth/signup', 'AuthController@signup');
Route::post('auth/signup', ['middleware' => 'cors', 'uses' => 'AuthController@signup']);
//Route::get('auth/unlink/{provider}', ['middleware' => 'auth', 'uses' => 'AuthController@unlink']);
Route::post('auth/unlink/', ['middleware' => 'auth', 'uses' => 'AuthController@unlink']);

// API Routes.
Route::get('api/me', ['middleware' => 'auth', 'uses' => 'UserController@getUser']);
Route::put('api/me', ['middleware' => 'auth', 'uses' => 'UserController@updateUser']);

// returns possible dictionaries for logged user (all dictionaries except user's locale language)
Route::get('api/get_dictionaries/', ['middleware' => 'auth', 'uses' => 'UserController@getDictionaries']);


Route::get('api/get_dictionaries_and_levels/', ['middleware' => 'auth', 'uses' => 'UserController@getDictionariesAndLevels']);


// returns possible dictionaries selected language sorted alphabeticaly
// Route::get('api/get_dictionaries_alphabeticaly/{language}', 'UserController@getDictionariesAlphabetically');

Route::get('api/get_list_of_words/{language_and_page}', ['middleware' => 'auth', 'uses' => 'UserController@getListOfWords']);











Route::get('api/get_list_of_words1/{language_and_page}', 'UserController@getListOfWords');
// development
Route::get('api/get_words_list1/{language}?page={pagination_page}', 'UserController@getWordsList');
Route::get('api/get_dictionaries1/{language?}', 'UserController@getDictionaries' );
//Route::get('api/get_dictionaries_and_levels/', 'UserController@getDictionariesAndLevels' );



// Initialize Angular.js App Route.
Route::get('/', 'HomeController@index');


