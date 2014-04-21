@extends('layouts.default')

@section('content')
		<h1 id="title">Stark</h1>
		<span id="slogan">Le talent au service de la technologie et de l'utilisateur.</span>
		<div id="description">Stark est un projet d'entreprise hors du commun, rendu possible par les qualités de chacun de ses contributeurs. Nous devons faire de nos rêves une réalité.</div>
	<div id="home-projects">
		@foreach($projects as $key => $project)
			@include('projects.presentation', array('project' => $project))
		@endforeach
	</div>
@stop
