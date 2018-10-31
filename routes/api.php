<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//User
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
//Profile
Route::get('profiles', 'ProfileController@index');
Route::get('profiles/{profile}', 'ProfileController@show');
//People
Route::get('people', 'PersonController@index');
Route::get('people/{person}', 'PersonController@show');
Route::post('people', 'PersonController@store');
Route::put('people/{person}', 'PersonController@update');
Route::delete('people/{person}', 'PersonController@destroy');
//Apps
Route::get('apps', 'AppController@index');
Route::get('apps/{app}', 'AppController@show');
Route::post('apps', 'AppController@store');
Route::put('apps/{app}', 'AppController@update');
Route::delete('apps/{app}', 'AppController@destroy');