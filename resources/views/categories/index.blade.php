<div class="container">
	<h1>Categories and Their Tasks</h1>

	@if($categories->isEmpty())
		<p>No categories found.</p>
	@else
		@foreach ($categories as $category)
			<div class="category">
				<h2>{{ $category->name }}</h2>

				@if($category->tasks->isEmpty())
					<p>No tasks for this category.</p>
				@else
					<ul>
						@foreach ($category->tasks as $task)
							<li>{{ $task->name }} - Due: {{ $task->deadline->format('Y-m-d H:i') }}</li>
						@endforeach
					</ul>
				@endif
			</div>
		@endforeach
	@endif
</div>
