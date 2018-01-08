<?php

Route::get('/testing', function () {
    return view('testing.fileupload');
});

/**
 * EXTERIOR DOMAIN ROUTES
 */

$exterior = function () {
    Route::get('/', function () {
        return "Local UniHelp fileshare // Unauthorized access is strictly prohibited, this incident will be reported.";
    })->name('static-index');
    Route::get('/{fileid}', 'StaticDataController@find')->name('static-find');
};

Route::domain('static-unihelp.eu')->group($exterior);
Route::domain('test.dev')->group($exterior);

/**
 * UNSAFE ROUTES
 */

// Website routes
Route::get('/', 'WebsiteController@index')->name('website-index');
Route::get('/about', 'WebsiteController@about')->name('website-about');
Route::get('/how-it-works', 'WebsiteController@how')->name('website-how');
Route::get('/login', 'WebsiteController@login')->name('website-login');
Route::get('/cookies', 'WebsiteController@cookies')->name('website-cookies');
Route::get('/privacy', 'WebsiteController@privacy')->name('website-privacy');
Route::get('/canvas/login', 'RegisterController@index')->name('canvas-login');
Route::get('/canvas/oauth_complete', 'RegisterController@oauth_complete')->name('canvas-oauth-complete');

/**
 * AUTH REQUIRED
 */

Route::group(['middleware' => ['auth']], function () {

    // Register after login
    Route::get('/register', 'RegisterController@register')->name('website-register');
    Route::post('/register', 'RegisterController@registerPost');
    Route::get('/canvas/me', 'CanvasController@me')->name('canvas-me');

    // Platform routes
    Route::group(['prefix' => 'p'], function () {
        Route::get('/sharing', 'SharingController@sharingIndex')->name('sharing-index');
        Route::get('/sharing/detail', 'SharingController@sharingDetail')->name('sharing-detail');
        Route::get('/sharing/new', 'SharingController@sharingNew')->name('sharing-new');
        Route::post('/sharing/new', 'SharingController@newFile')->name('sharing-new');
    });


});
