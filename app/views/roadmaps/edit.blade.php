<h1>Create a Roadmap</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($roadmap, array('route' => array('roadmaps.update', $roadmap->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('project', 'Project') }}
		{{ Form::select('project', $projects, array('required' => 'required')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Roadmap!') }}

{{ Form::close() }}