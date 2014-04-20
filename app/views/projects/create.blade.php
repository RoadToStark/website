@extends('layouts.default')

@section('content')

{{ HTML::ul($errors->all()) }}

<div id="create-project">
	{{ Form::open(array('url' => 'projects')) }}

		{{ Form::text('name', Input::old('name'), array('class' => 'title', 'placeholder' => 'Nom du projet')) }}

		{{ Form::text('description', Input::old('description'), array('class' => 'description', 'placeholder' => 'Courte description du projet')) }}
		
		<div class="features">	
			<section class="editor">
				<div class="outer">
					<div class="editorwrap">
						<section class="entry-markdown">
							<header class="floatingheader">
								&nbsp;&nbsp; Présentation détaillée 
							</header>
							<section class="entry-markdown-content">
								{{ Form::textarea('presentation', Input::old('presentation'), array('class' => 'form-control')) }}
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