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
Route::filter('authAdmin', function()
{
    if(!Auth::admin()->check()) {
        return View::make('admin.signin');
    }
});

Route::group(array('namespace' => 'Front'), function()
{
    Route::get('/angular/', ['uses' => 'AngularController@serve']);
    // Start-main page on SPA
    Route::get('/', function()
    {
        return View::make('front.facade');
    });
    //RESTful Resource Controllers
    Route::resource('article', 'ArticleController');
    Route::resource('project', 'ProjectController');
    Route::resource('comment', 'CommentController');
});

Route::group(array('namespace' => 'Admin',
    'prefix' => 'adm'), function()
{
    Route::group(array('before' => 'authAdmin'), function(){
        // Start-main page on SPA
        Route::get('dashboard', function()
        {
            return View::make('front.facade');
        });
    });

    Route::resource('auth', 'AuthController');
});