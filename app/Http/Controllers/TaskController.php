<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'is_completed' => 'required|boolean',
        ]);

        $task = new Task();
        $task->title = $validatedData['title'];
        $task->description = $validatedData['description'];
        $task->is_completed = $validatedData['is_completed'];
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    public function show(Task $task)
{
    return view('tasks.show', compact('task'));
}

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
{
    $validatedData = $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'is_completed' => 'required|boolean',
    ]);

    $task->title = $validatedData['title'];
    $task->description = $validatedData['description'];
    $task->is_completed = $validatedData['is_completed'];
    $task->save();

    return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
}

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}