<?php

// Website routes
Route::get('/', 'WebsiteController@index')->name('website-index');
Route::get('/about', 'WebsiteController@about')->name('website-about');
Route::get('/how', 'WebsiteController@how')->name('website-how');
Route::get('/login', 'WebsiteController@login')->name('website-login');
Route::get('/cookies', 'WebsiteController@cookies')->name('website-cookies');
Route::get('/privacy', 'WebsiteController@privacy')->name('website-privacy');

// Platform routes
Route::get('/canvas/me', 'CanvasController@me')->name('canvas_me');
Route::get('/canvas/login', 'CanvasRegisterController@index')->name('canvas_login');
Route::get('/canvas/oauth_complete', 'CanvasRegisterController@oauth_complete')->name('canvas_oauth_complete');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//test