<?php

/** EXTERIOR DOMAIN */
{
    $exterior = function () {
        Route::get('/', function () {
            return "Local UniHelp fileshare // Unauthorized access is strictly prohibited, this incident will be reported.";
        })->name('static-index');
        Route::get('/{fileid}', 'StaticDataController@find')->name('static-find');
    };

    Route::domain('static-unihelp.eu')->group($exterior);
    Route::domain('test.dev')->group($exterior);
}

/** PUBLIC */
{
    // Website routes
    Route::get('/', 'WebsiteController@index')->name('website-index');
    Route::get('/over', 'WebsiteController@about')->name('website-about');
    Route::get('/hoe-het-werkt', 'WebsiteController@how')->name('website-how');
    Route::get('/cookie-policy', 'WebsiteController@cookies')->name('website-cookies');
    Route::get('/privacy-policy', 'WebsiteController@privacy')->name('website-privacy');
    Route::get('/algemene-voorwaarden', 'WebsiteController@terms')->name('website-terms');
    Route::get('/veelgestelde-vragen', 'WebsiteController@faq')->name('website-faq');
    Route::get('/demo', 'WebsiteController@demo')->name('website-demo');
    Route::post('/demo', 'WebsiteController@demoformpost');
    Route::get('/contact', 'WebsiteController@contact')->name('website-contact');
    Route::post('/contact', 'WebsiteController@contactformpost');
    Route::get('/sitemap', 'WebsiteController@sitemap')->name('website-sitemap');


    // Authentication routes
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Auth::routes();
    // Route::get('/canvas/login', 'AuthController@index')->name('canvas-login');
    // Route::get('/canvas/oauth_complete', 'AuthController@oauth_complete')->name('canvas-oauth-complete');
    // Route::post('/logout', 'AuthController@logout');
    // Route::get('/register', 'AuthController@register')->name('register');
    // Route::post('/register', 'AuthController@registerPost');
    // Canvas routes
    // Route::get('/canvas/me', 'CanvasController@me')->name('canvas-me');
}

/** PRIVATE */
{
    Route::group(['middleware' => ['auth']], function () {

        Route::get('/logout', 'AuthController@logout')->name('logout');

        /** Platform routes */
        Route::group(['prefix' => 'p'], function () {

            /** Sharing */
            Route::get('/sharing', 'SharingController@index')->name('sharing-index');
            Route::get('/sharing/new', 'SharingController@newfile')->name('sharing-new');
            Route::get('/sharing/proxy/{public}', 'SharingController@downloadproxy')->name('sharing-download');
            Route::get('/sharing/{id}', 'SharingController@detail')->name('sharing-detail');
            Route::post('/sharing/new', 'SharingController@newfilePost');
            Route::post('/sharing/filter', 'SharingController@ajaxFilter');
            Route::post('/sharing/rate', 'SharingController@ajaxRate');

            /** Community */
            Route::get('/community', 'CommunityController@index')->name('community-index');
            Route::post('/community/filter', 'CommunityController@ajaxFilter');
            Route::get('/community/{group_id}', 'CommunityController@groupdetail')->name('community-group-detail');
            Route::get('/community/{group_id}/new', 'CommunityController@newpost')->name('community-post-new');
            Route::get('/community/{group_id}/{post_id}', 'CommunityController@postdetail')->name('community-post-detail');
            Route::post('/community/{group_id}/new', 'CommunityController@newpostpost');
            Route::post('/community/{group_id}/{post_id}/comment', 'CommunityController@addcommentasync')->name('community-add-comment');
            //Route::get('/community/new', 'CommunityController@newgroup')->name('community-group-new');
            //Route::post('/community/new', 'CommunityController@newgrouppost');

            /** Tutoring */
            Route::get('/tutoring', 'TutoringController@index')->name('tutoring-index');
            Route::post('/tutoring/panel/{sessionid}', 'TutoringController@loadUserPanelAjax')->name('tutoring-panel-ajax');
            Route::get('/tutoring/tutor/new', 'TutoringController@newtutor')->name('tutoring-tutor-new');
            Route::post('/tutoring/tutor/new', 'TutoringController@newtutorpost');
            Route::get('/tutoring/tutee/new', 'TutoringController@newtutee')->name('tutoring-tutee-new');
            Route::post('/tutoring/tutee/new', 'TutoringController@newtuteepost');
            Route::get('/tutoring/help', 'TutoringController@help')->name('tutoring-help');
            Route::get('/tutoring/accept/{tutee_id}', 'TutoringController@accept')->name('tutoring-accept');
            Route::get('/tutoring/{id}/messages', 'TutoringController@messages')->name('tutoring-messages');
            Route::get('/tutoring/{id}/planning', 'TutoringController@planning')->name('tutoring-planning');

            /** Peer Assessment */
            Route::get('/assessment', 'AssessmentController@index')->name('assessment-index');
            Route::get('/assessment/{id}', 'AssessmentController@detail')->name('assessment-detail');


            /** Profile */
            Route::get('/profile', 'ProfileController@index')->name('profile-index');
            Route::get('/profile/settings', 'ProfileController@settings')->name('profile-settings');
            Route::post('/profile/update', 'ProfileController@updateprofilepost')->name('profile-update');
            Route::post('/profile/preferences', 'ProfileController@updatepreferencepost');
            Route::post('/profile/theme', 'ProfileController@updatethemepost');
            Route::get('/profile/ratings', 'ProfileController@ratings')->name('profile-ratings');
            Route::get('/profile/downloads', 'ProfileController@downloads')->name('profile-downloads');
            Route::get('/profile/uploads', 'ProfileController@uploads')->name('profile-uploads');
            Route::get('/profile/notifications', 'ProfileController@notifications')->name('profile-notifications');


            /** Notifications */
            Route::get('/profile/notifications/read/{id}', 'NotificationController@readAjax')->name('notification-read');

            /** User Courses */
            Route::get('/profile/course/add/{id}', 'ProfileController@addusercourse')->name('course-add');
            Route::get('/profile/course/remove/{id}', 'ProfileController@removeusercourse')->name('course-remove');
            Route::post('/profile/filter', 'ProfileController@ajaxFilter');
        });
    });
}