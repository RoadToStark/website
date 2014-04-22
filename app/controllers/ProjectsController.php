<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
        
        return View::make('projects.index')
            ->with('projects', $projects);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::check())
			return View::make('projects.create');
		else 
			return Redirect::to('/')->with('message', 'Vous devez être connecté pour créer un projet');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'name'         => 'required',
            'description'  => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
           return Redirect::to('projects/create')
                ->withErrors($validator); 
        } else {
            $project = new Project;
            $project->name         = Input::get('name');
            $project->description  = Input::get('description');
            $project->presentation = Input::get('presentation');
            $project->save();
            
            $project_id = Project::where('name', '=', Input::get('name'))->first()->id;
            
            $roadmap = new Roadmap;
            $roadmap->project      = $project_id;
            $roadmap->description  = Input::get('description');
            $roadmap->save();
            
            $roadmap_redirect = Roadmap::where('project', '=', $project_id)->first();
            Session::flash('message', 'Le projet a été créé');
            return Redirect::to('roadmaps/' . $roadmap_redirect->id . '/edit');
        }
                            
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::find($id);
		$Parsedown = new Parsedown();
		$presentation = $Parsedown->text($project->presentation);
        
        return View::make('projects.show')
            ->with(array(
            'project' => $project,
            'presentation' => $presentation
            ));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::find($id);
        
        if (Auth::check())
			return View::make('projects.edit')
            	->with('project', $project);
		else 
			return Redirect::to('/')->with('message', 'Vous devez être connecté pour éditer un projet');
        
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'name'         => 'required',
            'description'  => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
           return Redirect::to('projects/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            $project = Project::find($id);
            $project->name         = Input::get('name');
            $project->description  = Input::get('description');
            $project->presentation = Input::get('presentation');
            $project->save();
            
            Session::flash('message', 'Le projet a été édité');
            return Redirect::to('projects');
        }                            
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$project = Project::find($id);
        $project->delete();
        
        Session::flash('message', 'Projet supprimé');
        return Redirect::to('projects');
	}


}
