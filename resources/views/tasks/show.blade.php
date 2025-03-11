@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Task Details</h1>

    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-700">{{ $task->title }}</h2>
        <p class="text-gray-600 mt-2">{{ $task->description }}</p>
        <div class="mt-4">
            <span class="px-2 py-1 text-sm {{ $task->is_completed ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }} rounded-full">
                {{ $task->is_completed ? 'Completed' : 'Pending' }}
            </span>
        </div>
        <div class="mt-4 text-sm text-gray-500">
            <p>Created: {{ $task->created_at }}</p>
            <p>Updated: {{ $task->updated_at }}</p>
        </div>
    </div>

    <div class="flex space-x-4">
        <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Edit</a>
        <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back to List</a>
    </div>
</div>
@endsection