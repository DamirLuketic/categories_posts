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
    return view('users.index');
});

Route::resource('/users', 'UserController');

Route::get('/login_page', ['as' => 'login_page', 'uses' => 'UserController@login_page']);

Route::post('/login_redirect', ['as' => 'login_redirect', 'uses' => 'UserController@login']);




Route::group(['middleware' => 'isLog'], function()
{

Route::resource('/posts', 'PostController');

Route::get('/logout', ['as' => 'logout', 'uses' => 'UserController@logout']);

});