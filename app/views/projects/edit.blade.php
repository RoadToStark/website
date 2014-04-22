@extends('layouts.default')

@section('content')

{{ HTML::ul($errors->all()) }}

<div id="create-project">
	{{ Form::model($project, array('route' => array('projects.update', $project->id), 'method' => 'PUT')) }}

		{{ Form::text('name', null, array('class' => 'title', 'placeholder' => 'Nom du projet', 'required' => 'required')) }}

		{{ Form::text('description', null, array('class' => 'description', 'placeholder' => 'Courte description du projet', 'required' => 'required')) }}
		
		<div class="features">	
			<section class="editor">
				<div class="outer">
					<div class="editorwrap">
						<section class="entry-markdown">
							<header class="floatingheader">
								&nbsp;&nbsp; Présentation détaillée 
							</header>
							<section class="entry-markdown-content">
								{{ Form::textarea('presentation', null, array('class' => 'form-control', 'required' => 'required')) }}
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
		<div class="submit">
			{{ Form::submit('Créer le projet', array('class' => 'btn btn-dark')) }}
		</div>
	
		{{ Form::close() }}
</div>
<script>
	$(document).ready(function () {
	    $(".editor").ghostDown();
	});
</script>


@stop