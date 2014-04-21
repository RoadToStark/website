<?php

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

Route::get('/', 'HomeController@showHomePage');

Route::resource('projects', 'ProjectsController');

Route::resource('roadmaps', 'RoadmapsController');

Route::resource('tasks', 'TasksController');

/* User actions routes */

Route::post('/login', 'UsersController@login');
Route::get('/register', function() {
	return View::make('users.register');
});
Route::post('/register', 'UsersController@register');
Route::get('logout', 'UsersController@logout');