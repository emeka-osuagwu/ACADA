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


Route::get('/', [
    'uses' => 'VideoController@index',
    'as'   => '/'
]);

Route::get('/contact', function () {
    return view('app.pages.contact');
});

Route::get('search', [
    'uses' => 'SearchController@index',
    'as'   => 'search'
]);


Route::get('create', [
    'uses' => 'VideoController@create',
    'as'   => 'create'
]);

Route::get('createpost', [
    'uses' => 'VideoController@store',
    'as'   => 'createpost'
]);








Route::get('video', [
    'uses' => 'VideoController@index',
    'as'   => 'video'
]);

Route::get('video/{category}', [
    'uses' => 'VideoController@category',
    'as'   => 'video'
]);

Route::get('video/{category}/{id}', [
    'uses' => 'VideoController@show',
    'as'   => 'video'
]);



Route::get('signup', [
    'uses' => 'Auth\AuthController@postSignup',
    'as'   => 'signup'
]);

Route::get('signin', [
    'uses' => 'Auth\AuthController@postSignin',
    'as'   => 'signin'
]);

Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);



Route::get('/login/{provider}', 'OauthController@getSocialRedirect');
