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


Route::get('/', function () {
    return view('app.index');
});

Route::get('/register', function () {
    return view('app.register');
});

Route::get('/login', function () {
    return view('app.login');
});

Route::get('videos/emeka', function () {
    return view('app.video');
});

Route::get('/user/emeka', function () {
    return view('app.profile');
});

Route::get('/player', function () {
    return view('app.player');
});

Route::get('/category', function () {
    return view('app.category');
});























// Route::get('/', [
//     'uses' => 'VideoController@index',
//     'as'   => '/'
// ]);


// Route::get('/video/like', [
//     'uses' => 'LikeController@postLike',
//     'as'   => 'video.like'
// ]);

// Route::get('/video/dislike', [
//     'uses' => 'LikeController@postUnLike',
//     'as'   => 'video.like'
// ]);

// Route::get('/video/view', [
//     'uses' => 'ViewController@increaseView',
//     'as'   => 'video.view'
// ]);

// Route::get('/video/favourite', [
//     'uses' => 'FavouriteController@favourite',
//     'as'   => 'video.Favourite'
// ]);

// Route::get('/video/unfavourite', [
//     'uses' => 'FavouriteController@unFavourite',
//     'as'   => 'video.unfavourite'
// ]);

// Route::get('/video/view', [
//     'uses' => 'ViewController@view',
//     'as'   => 'video.view'
// ]);

