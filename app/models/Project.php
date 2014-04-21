<?php
	
class Project extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	/**
	 * Define the relationship on 'owner' column
	 *
	 * @return User
	 */
	public function user() 
	{
		return $this->belongsTo('User', 'owner');
	}

	/**
	 * Define the relationship for roadmaps
	 *
	 * @return Roadmap
	 */
	public function roadmap()
	{
		return $this->hasOne('Roadmap');
	}

	
}