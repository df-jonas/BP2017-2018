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

Route::get('/canvas/me', 'CanvasController@testUser')->name('canvas_me');;
Route::get('/canvas/login', 'CanvasController@index')->name('canvas_login');
Route::get('/canvas/oauth_complete', 'CanvasController@oauth_complete')->name('canvas_oauth_complete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
