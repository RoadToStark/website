<?php
	
class Roadmap extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roadmaps';

	/**
	 * Define the relationship on 'project' column
	 *
	 * @return Project
	 */
	public function project() 
	{
		return $this->belongsTo('Project', 'project');
	}

	/**
	 * Define the relationship with tasks
	 *
	 * @return Tasks
	 */
	public function tasks() 
	{
		return $this->hasMany('Task', 'roadmap');
	}

	
}