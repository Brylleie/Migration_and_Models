@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Task Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">{{ $task->description }}</p>
            <p class="card-text">
                <strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Pending' }}
            </p>
            <p class="card-text">
                <strong>Created at:</strong> {{ $task->created_at }}
            </p>
            <p class="card-text">
                <strong>Updated at:</strong> {{ $task->updated_at }}
            </p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
