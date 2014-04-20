<h1>Create a Roadmap</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'roadmaps')) }}

	<div class="form-group">
		{{ Form::label('project', 'Project') }}
		{{ Form::select('project', $projects, array('required' => 'required')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Roadmap!') }}

{{ Form::close() }}