<?php
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('home');

Route::get('/greet', [GreetController::class, 'show'])->name('greet');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::resource('tasks', TaskController::class)->names([
    'index' => 'tasks.index',
    'store' => 'tasks.store',
    'show' => 'tasks.show',
    'edit' => 'tasks.edit',
    'update' => 'tasks.update',
    'destroy' => 'tasks.destroy',
]);

