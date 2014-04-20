@extends('layouts.default')

@section('content')

<h1 class="title">Créer une tâche pour le projet {{ $roadmap->project()->first()->name }}</h1>
<div id="create-task">
		<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}
	
	{{ Form::open(array('url' => 'tasks')) }}
		<div class="form-line">
			{{ Form::text('name', Input::old('name'), array('class' => 'name', 'placeholder' => 'Nom de la tâche', 'required' => 'required')) }}
			{{ Form::text('description', Input::old('description'), array('class' => 'description', 'placeholder' => 'Description globale de la tâche', 'required' => 'required')) }}
		</div>
		<div class="form-line">
			{{ Form::text('starts_at', Input::old('starts_at'), array('class' => 'date', 'placeholder' => 'yyyy-mm-dd', 'required' => 'required')) }}
			{{ Form::text('ends_at', Input::old('ends_at'), array('class' => 'date', 'placeholder' => 'yyyy-mm-dd', 'required' => 'required')) }}
		</div>	
		<div class="features">	
			<section class="editor">
				<div class="outer">
					<div class="editorwrap">
						<section class="entry-markdown">
							<header class="floatingheader">
								&nbsp;&nbsp; Instructions
							</header>
							<section class="entry-markdown-content">
								{{ Form::textarea('instructions', Input::old('instructions'), array('class' => 'form-control', 'required' => 'required')) }}
							</section>
						</section>
						<section class="entry-preview active">
							<header class="floatingheader">
							  &nbsp;&nbsp; Rendu <span class="entry-word-count">0 mots</span>
							</header>
							<section class="entry-preview-content">
								<div class="rendered-markdown"></div>
							</section>
						</section>
					</div>
				</div>
			</section>
		</div>
		{{ Form::hidden('roadmap', $roadmap->id) }}
		<div class="submit">
			{{ Form::submit('Ajouter la tâche', array('class' => 'btn btn-dark')) }}
		</div>
	
	{{ Form::close() }}
</div>
<script>
	$(document).ready(function () {
	    $(".editor").ghostDown();
	});
</script>

@stop