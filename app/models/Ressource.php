<?php
	
class Ressource extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ressources';

	/**
	 * Define the relationship with task
	 *
	 * @return Task
	 */
	public function task() 
	{
		return $this->belongsTo('Task');
	}

	
}