<?php

// Website routes
Route::get('/', 'WebsiteController@index')->name('website-index');
Route::get('/about', 'WebsiteController@about')->name('website-about');
Route::get('/how-it-works', 'WebsiteController@how')->name('website-how');
Route::get('/login', 'WebsiteController@login')->name('website-login');
Route::get('/register', 'WebsiteController@register')->name('website-register');
Route::get('/cookies', 'WebsiteController@cookies')->name('website-cookies');
Route::get('/privacy', 'WebsiteController@privacy')->name('website-privacy');

// Register routes
Route::get('/canvas/me', 'CanvasController@me')->name('canvas_me');
Route::get('/canvas/login', 'CanvasRegisterController@index')->name('canvas_login');
Route::get('/canvas/oauth_complete', 'CanvasRegisterController@oauth_complete')->name('canvas_oauth_complete');




// Platform routes
Route::group(['prefix' => 'platform'], function () {

    Route::get('/', [
        'uses' => 'SharingController@sharingIndex',
        'as' => 'sharing-index'
    ]);

    Route::get('/sharing', [
        'uses' => 'SharingController@sharingIndex',
        'as' => 'sharing-index'
    ]);

    Route::get('/sharing/detail', [
        'uses' => 'SharingController@sharingDetail',
        'as' => 'sharing-detail'
    ]);

    Route::get('/sharing/new', [
        'uses' => 'SharingController@sharingNew',
        'as' => 'sharing-new'
    ]);


});
//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');






