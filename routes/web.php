<?php

use Illuminate\Support\Facades\Route;

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
    Route::post('/tweets', 'TweetController@store');

    Route::post('/profile/{user}/follow', 'FollowController@store')->name('follow');
    Route::get('/profile/{user}/edit', 'ProfileController@edit')
        ->middleware('can:edit,user')
        ->name('profile.edit');

    Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
});

Route::get('/profile/{user}', 'ProfileController@index')->name('profile');

Auth::routes();
