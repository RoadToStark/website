<?php

class RoadmapsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$roadmaps = Roadmap::all();
		
		return View::make('roadmaps.index')
			->with('roadmaps', $roadmaps);
	}


	/**
	 * Show the form for creating a new resource.
	 * Get the lists of projects to populate select 
	 *
	 * @return Response
	 */
	public function create()
	{
	
		$projects = Project::all()->lists('name', 'id');
		return View::make('roadmaps.create')
			->with('projects', $projects);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'project'         => 'required',
            'description'  => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
           return Redirect::to('roadmaps/create')
                ->withErrors($validator); 
        } else {
            $roadmap = new Roadmap;
            $roadmap->project      = Input::get('project');
            $roadmap->description  = Input::get('description');
            $roadmap->save();
            
            Session::flash('message', 'La roadmap a été ajoutée au projet');
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
		$roadmap = Roadmap::find($id);
		
		return View::make('roadmaps.show')
			->with('roadmap', $roadmap);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$roadmap = Roadmap::find($id);
		$projects = Project::all()->lists('name', 'id');
		
		return View::make('roadmaps.edit')
			->with(array(
				'roadmap'  => $roadmap,
				'projects' => $projects
				));
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
            'project'         => 'required',
            'description'  => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
           return Redirect::to('roadmaps/create')
                ->withErrors($validator); 
        } else {
            $roadmap = Roadmap::find($id);
            $roadmap->project      = Input::get('project');
            $roadmap->description  = Input::get('description');
            $roadmap->save();
            
            Session::flash('message', 'La roadmap a été éditée');
            return Redirect::to('roadmaps');
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
		$roadmap = Roadmap::find($id);
		$roadmap->delete();
		
		Session::flash('message', 'Roadmap supprimée');
		return Redirect::to('projects');
	}


}
