@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="is_completed" name="is_completed" value="1">
            <label class="form-check-label" for="is_completed">Is Completed</label>
        </div>

        <button type="submit" class="btn btn-primary">Create Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
