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

/**
 * route default
 */
Route::get('/', 'PostController@index');

/**
 * route for about page
 */
Route::get('about', function() {
    return view('about');
});

/**
 * Resources
 */
Route::resource('post', 'PostController');
Route::resource('tag', 'TagController');
Route::resource('type', 'TypeController');