<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/**
	 *
	 * Get the 3 bigger projects from the database
	 * Return home view
	 *
	 */
	public function showHomePage()
	{
		$projects = Project::where('id', '<', 4)->get();
		
		return View::make('home')
			->with('projects', $projects);
	}

}
