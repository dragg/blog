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

Route::get('/angular/', ['uses' => 'AngularController@serve']);


// Start-main page on SPA
Route::get('/', function()
{
	return View::make('facade');
});

//RESTful Resource Controllers
Route::resource('article', 'ArticleController');
Route::resource('project', 'ProjectController');
Route::resource('comment', 'CommentController');