<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', 'TweetController@index')->name('home');
    Route::post('/tweet', 'TweetController@store')->name('tweet');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@like')->name('tweet.like');
    Route::patch('/tweets/{tweet}/like', 'TweetLikesController@dislike')->name('tweet.dislike');

    Route::post('/profile/{user}/follow', 'FollowController@store')->name('follow');
    
    Route::middleware('can:edit,user')->group(function () {
        Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
        Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
    });

    Route::get('/explore', 'ExploreController')->name('explore');
});
  
Route::get('/profile/{user}', 'ProfileController@index')->name('profile');

Auth::routes();
