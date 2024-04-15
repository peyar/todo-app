<div class="container">
	<h1>Tasks</h1>

	@if($tasks->isEmpty())
		<p>No tasks found.</p>
	@else
		@foreach ($tasks as $task)
			<div class="category">
				<h2>{{ $task->name }}</h2>
			</div>
		@endforeach
	@endif
</div>
