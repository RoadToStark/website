@extends('layouts.default')

@section('content')

<h1 id="roadmap-project">{{ $roadmap->project()->first()->name }} - Feuille de route</h1>
<div class="add-task">
	{{ link_to_action('TasksController@create', '+', $parameters = array('roadmap' => $roadmap->id), $attributes = array('title' => 'Ajouter une tâche')) }}
</div>
<div id="roadmap-tasks">
	@foreach($tasks as $key => $task)
		@include('tasks.resume', array('task', $task))
	@endforeach
</div>

@stop
