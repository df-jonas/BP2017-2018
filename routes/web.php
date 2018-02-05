<?php

/*Route::get('/p/upload', function () {
    return view('testing.fileupload');
});*/

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
Route::get('/cookies', 'WebsiteController@cookies')->name('website-cookies');
Route::get('/privacy', 'WebsiteController@privacy')->name('website-privacy');

// Auth routes
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/canvas/login', 'AuthController@index')->name('canvas-login');
Route::get('/canvas/oauth_complete', 'AuthController@oauth_complete')->name('canvas-oauth-complete');

/**
 * AUTH REQUIRED
 */

Route::group(['middleware' => ['auth']], function () {

    // Auth routes
    Route::get('/register', 'AuthController@register')->name('register');
    Route::post('/register', 'AuthController@registerPost');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::post('/logout', 'AuthController@logout');

    // Canvas routes
    Route::get('/canvas/me', 'CanvasController@me')->name('canvas-me');

    // Platform routes
    Route::group(['middleware' => ['valid'], 'prefix' => 'p'], function () {

        /**
         * Sharing
        */
        Route::get('/sharing', 'SharingController@index')->name('sharing-index');
        Route::get('/sharing/detail', 'SharingController@detail')->name('sharing-detail');
        Route::get('/sharing/new', 'SharingController@newfile')->name('sharing-new');
        Route::post('/sharing/new', 'SharingController@newfilePost');

        /**
         * Community
         */
        Route::get('/groups', 'CommunityController@index')->name('community-index');

        /**
         * Tutoring
         */
        Route::get('/tutoring', 'TutoringController@index')->name('tutoring-index');
    });

});
