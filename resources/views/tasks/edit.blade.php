@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>

    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" class="form-control" required>{{ $task->description }}</textarea>

    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
    </select>

    <button type="submit" class="btn btn-primary mt-3">Update Task</button>
</form>

@endsection
