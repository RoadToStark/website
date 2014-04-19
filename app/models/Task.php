<?php
	
class Task extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';

	/**
	 * Define the relationship with Roadmap
	 *
	 * @return Roadmap
	 */
	public function roadmap() 
	{
		return $this->belongsTo('Roadmap');
	}

	/**
	 * Define the relationship with ressources
	 *
	 * @return Ressources
	 */
	public function ressources()
	{
		return $this->hasMany('Ressource', 'task');
	}

	
}