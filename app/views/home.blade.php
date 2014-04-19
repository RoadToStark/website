@extends('layouts.default')

@section('content')
	<header>
		<h1 id="title">Road to Stark</h1>
		<div id="slogan">Le talent au service de la technologie et de l'utilisateur. Stark est un projet d'entreprise hors du commun, rendu possible par les qualités de chacun de ses contributeurs. Nous avons la possibilités de faire de nos rêves une réalité, il suffit de regarder ci-dessous pour le voir.</div>
	</header>
	<div id="home-projects">
		@include('projects.presentation')
	</div>
@stop
