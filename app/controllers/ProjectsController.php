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
		return View::make('projects.create');
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
            
            Session::flash('message', 'Le projet a été créé');
            return Redirect::to('projects');
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
        
        return View::make('projects.show')
            ->with('project', $project);
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
        
        return View::make('projects.edit')
            ->with('project', $project);
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
