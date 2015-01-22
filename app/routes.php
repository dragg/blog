<?php

Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array(
    'domain' => '{lang}.blog.com',
    'before' => 'localization'), function()
{
    Route::group(array('namespace' => 'Front'), function()
    {
        Route::get('/angular/', ['uses' => 'AngularController@serve']);

        // Start-main page on SPA
        Route::get('/', function()
        {
            return View::make('front\facade');
        });

        //RESTful Resource Controllers
        Route::resource('article', 'ArticleController');
        Route::resource('project', 'ProjectController');
        Route::resource('comment', 'CommentController');
    });

    Route::group(array('namespace' => 'Admin',
        'prefix' => 'adm'), function()
    {
        Route::group(array('before' => 'auth.admin'), function(){
            // Start-main page on SPA
            Route::get('dashboard', function()
            {
                return View::make('admin.facade');
            });

            Route::get('logout', function() {
                Auth::admin()->logout();
            });
        });

        Route::resource('auth', 'AuthController');
    });
});

Route::group(array('domain' => 'blog.com'), function()
{
    Route::any('{url?}', function($url) {
        $redirectUrl = 'http://' . Config::get('app.locale'). '.' . 'blog.com/' . $url;
        return Redirect::to($redirectUrl);
    })->where(['url' => '[-a-z0-9/]+']);

});