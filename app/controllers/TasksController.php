<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::all();
		
		return View::make('tasks.index')
			->with('tasks', $tasks);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Input::has('roadmap'))
		$roadmap = Roadmap::find(Input::get('roadmap'));
		
		return View::make('tasks.create')
			->with('roadmap', $roadmap);
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
            'description'  => 'required',
            'instructions' => 'required',
            'roadmap' 	   => 'required',
            'starts_at'    => 'required',
            'ends_at'      => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
           return Redirect::to('roadmaps/create')
                ->withErrors($validator); 
        } else {
            $task = new Task;
            $task->name     	 = Input::get('name');
            $task->description   = Input::get('description');
            $task->instructions  = Input::get('instructions');
			$task->roadmap	 	 = Input::get('roadmap');
			$task->starts_at 	 = Input::get('starts_at');
			$task->ends_at	 	 = Input::get('ends_at');
            $task->save();
            
            Session::flash('message', 'La tâche a été ajoutée à la roadmap');
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
		$task = Task::find($id);
		
		return View::make('tasks.show')
			->with('task', $task);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$task = Task::find($id);
		$roadmaps = Roadmap::all()->lists('id', 'description');
		
		return View::make('tasks.edit')
			->with(array(
				'task'     => $task,
				'roadmaps' => $roadmaps
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
            'name'         => 'required',
            'description'  => 'required',
            'instructions' => 'required',
            'roadmap' 	   => 'required',
            'starts_at'    => 'required',
            'ends_at'      => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()) {
           return Redirect::to('roadmaps/' . $id . '/edit')
                ->withErrors($validator); 
        } else {
            $task = Task::find($id);
            $task->name     	 = Input::get('name');
            $task->description   = Input::get('description');
            $task->instructions  = Input::get('instructions');
			$task->roadmap	 	 = Input::get('roadmap');
			$task->starts_at 	 = Input::get('starts_at');
			$task->ends_at	 	 = Input::get('ends_at');
            $task->save();
            
            Session::flash('message', 'La tâche a été éditée');
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
		$task = Task::finf($id);
		$task->delete();
		
		Session::flash('message', 'Tâche supprimée');
		return Redirect::to('projects');
	}


}
