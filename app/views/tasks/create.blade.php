<h1>Create a Project</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'projects')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>
    
    <div class="form-group">
		{{ Form::label('presentation', 'Présentation') }}
		{{ Form::text('presentation', Input::old('presentation'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Project!') }}

{{ Form::close() }}