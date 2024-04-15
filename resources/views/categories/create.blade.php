<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Add Category</button>
</form>