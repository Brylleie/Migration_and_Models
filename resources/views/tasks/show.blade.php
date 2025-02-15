@extends('layouts.app')

@section('content')
<div class="container">
    @if ($task)
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <small>Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}</small>
    @else
        <p>Task not found.</p>
    @endif
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
</div>
@endsection