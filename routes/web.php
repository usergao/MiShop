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

Route::get('/mobile/oauth', 'Auth\AuthController@mobileOauth');

Route::get('/mobile/callback', 'Auth\AuthController@mobileCallback');

Route::get('/web/oauth', 'Auth\AuthController@webOauth');

Route::get('/web/callback', 'Auth\AuthController@webCallback');

Route::get('passdata', 'Auth\AuthController@passData');
Route::get('printdata', 'Auth\AuthController@printData');
