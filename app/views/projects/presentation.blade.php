<div id="project-container">
	<div class="project-picture"></div>
	<div class="project-infos">
		<span class="project-name">{{ $project->name }}</span>
		<span class="project-description">{{ $project->description }}</span>	
	</div>
	<a href="{{ 'projects/' . $project->id }}" class="project-link">Voir les détails</a>
</div>