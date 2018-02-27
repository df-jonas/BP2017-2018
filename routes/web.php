<?php

/** EXTERIOR DOMAIN ROUTES */

$exterior = function () {
    Route::get('/', function () {
        return "Local UniHelp fileshare // Unauthorized access is strictly prohibited, this incident will be reported.";
    })->name('static-index');
    Route::get('/{fileid}', 'StaticDataController@find')->name('static-find');
};

Route::domain('static-unihelp.eu')->group($exterior);
Route::domain('test.dev')->group($exterior);

/** UNSAFE ROUTES */
Route::get('/', 'WebsiteController@index')->name('website-index');
Route::get('/about', 'WebsiteController@about')->name('website-about');
Route::get('/how-it-works', 'WebsiteController@how')->name('website-how');
Route::get('/cookies', 'WebsiteController@cookies')->name('website-cookies');
Route::get('/privacy', 'WebsiteController@privacy')->name('website-privacy');
Route::get('/copyright', 'WebsiteController@copyright')->name('website-copyright');

// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Auth routes
// Route::get('/canvas/login', 'AuthController@index')->name('canvas-login');
// Route::get('/canvas/oauth_complete', 'AuthController@oauth_complete')->name('canvas-oauth-complete');
// Route::post('/logout', 'AuthController@logout');
// Route::get('/register', 'AuthController@register')->name('register');
// Route::post('/register', 'AuthController@registerPost');
// Canvas routes
// Route::get('/canvas/me', 'CanvasController@me')->name('canvas-me');

/** AUTH REQUIRED */
Route::group(['middleware' => ['auth']], function () {

    // Extra logout route
    Route::get('/logout', 'AuthController@logout')->name('logout');

    // Platform routes
    Route::group(['prefix' => 'p'], function () {

        /** Sharing */
        Route::get('/sharing', 'SharingController@index')->name('sharing-index');
        Route::get('/sharing/new', 'SharingController@newfile')->name('sharing-new');
        Route::post('/sharing/new', 'SharingController@newfilePost');
        Route::post('/sharing/filter', 'SharingController@ajaxFilter');
        Route::post('/sharing/rate', 'SharingController@ajaxRate');
        Route::get('/sharing/proxy/{public}', 'SharingController@downloadproxy')->name('sharing-download');
        Route::get('/sharing/{id}', 'SharingController@detail')->name('sharing-detail');

        /** Community */
        Route::get('/community', 'CommunityController@index')->name('community-index');
        Route::get('/community/new', 'CommunityController@newgroup')->name('community-group-new');
        Route::post('/community/new', 'CommunityController@newgrouppost');
        Route::get('/community/{group_id}', 'CommunityController@groupdetail')->name('community-group-detail');
        Route::get('/community/{group_id}/new', 'CommunityController@newpost')->name('community-post-new');
        Route::post('/community/{group_id}/new', 'CommunityController@newpostpost');
        Route::get('/community/{group_id}/{post_id}', 'CommunityController@postdetail')->name('community-post-detail');

        /** Tutoring */
        Route::get('/tutoring', 'TutoringController@index')->name('tutoring-index');


        /**
         * Profile
         */
        Route::get('/profile', 'ProfileController@index')->name('profile-index');

    });

});