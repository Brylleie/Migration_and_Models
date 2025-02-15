@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="create-task-btn">Create New Task</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($tasks->isEmpty())
        <p></p>
        <p>No tasks found.</p>
    @else
        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $task->title }}</strong>
                        <p>{{ $task->description }}</p>
                        <small>Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}</small>
                    </div>
                    <div>
                        <form action="{{ route('tasks.toggle', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-sm {{ $task->is_completed ? 'btn-warning' : 'btn-success' }}">
                                {{ $task->is_completed ? 'Mark as Incomplete' : 'Mark as Complete' }}
                            </button>
                        </form>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection