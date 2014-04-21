<div id="project-container">
	<div class="project-picture"></div>
	<div class="project-infos">
		<span class="project-name">{{ $project->name }}</span>
		<span class="project-description">{{ $project->description }}</span>	
	</div>
	{{ HTML::link('projects/' . $project->id, 'Voir les détails', array('class' => 'project-link')) }}
</div>