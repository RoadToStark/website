@extends('layouts.default')

@section('content')
	<div id="project-page">
		<h1 class="project-title">{{ $project->name }}</h1>
		<div id="project-body">
			<div id="project-sidebar">
				<div class="project-picture"></div>
				<span class="project-description">{{ $project->description }}</span>
				<span class="project-owner">Lancé par <span class="owner-name">{{ $project->user()->first()->firstname . ' ' .  $project->user()->first()->lastname}}
			</div>
			<div id="presentation">
				{{ $presentation }}
			</div>
		</div>
		<span class="show-roadmap">Voir la feuille de route</span>
	</div>
		
@stop
