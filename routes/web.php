<?php

Route::domain('static-unihelp.eu')->group(function () {
    Route::get('/', function () {
        return "UniHelp fileshare // Unauthorized access is strictly prohibited, this incident will be reported.";
    })->name('static-index');
});

// Platform routes
Route::group(['prefix' => 'p'], function () {
    Route::get('/sharing', 'SharingController@sharingIndex')->name('sharing-index');
    Route::get('/sharing/detail', 'SharingController@sharingDetail')->name('sharing-detail');
    Route::get('/sharing/new', 'SharingController@sharingNew')->name('sharing-new');
});

// Register routes
Route::group(['prefix' => 'canvas'], function () {
    Route::get('/me', 'CanvasController@me')->name('canvas_me');
    Route::get('/login', 'CanvasRegisterController@index')->name('canvas_login');
    Route::get('/oauth_complete', 'CanvasRegisterController@oauth_complete')->name('canvas_oauth_complete');
});

// Website routes
Route::get('/', 'WebsiteController@index')->name('website-index');
Route::get('/about', 'WebsiteController@about')->name('website-about');
Route::get('/how-it-works', 'WebsiteController@how')->name('website-how');
Route::get('/login', 'WebsiteController@login')->name('website-login');
Route::get('/register', 'WebsiteController@register')->name('website-register');
Route::get('/cookies', 'WebsiteController@cookies')->name('website-cookies');
Route::get('/privacy', 'WebsiteController@privacy')->name('website-privacy');
