<div id="task-resume">
	<div id="task-header">
		<span class="task-name"> {{ $task->name }} </span>
		<span class="task-end"> {{ $task->ends_at }} </span>
		<span class="task-start"> {{ $task->starts_at }} </span>
	</div>
	<div id="task-body">
		<span class="task-description"> {{ $task->description }} </span>
	</div>
</div>