@extends('layouts.default')

@section('content')
	<div id="home-projects">
		@foreach($projects as $key => $project)
			@include('projects.presentation', array('project' => $project))
		@endforeach
	</div>		
@stop
