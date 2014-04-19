@extends('layouts.default')

@section('content')
	<header>
		<h1 id="title">Stark</h1>
		<span id="slogan">Le talent au service de la technologie et de l'utilisateur.</span>
		<div id="description">Stark est un projet d'entreprise hors du commun, rendu possible par les qualités de chacun de ses contributeurs. Nous devons faire de nos rêves une réalité.</div>
	</header>
	<div id="home-projects">
		@include('projects.presentation')
	</div>
@stop
