<h1>Edit a Project</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($project, array('route' => array('projects.update', $project->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', null, array('class' => 'form-control')) }}
	</div>
    
    <div class="form-group">
		{{ Form::label('presentation', 'Présentation') }}
		{{ Form::textarea('presentation', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Project!') }}

{{ Form::close() }}