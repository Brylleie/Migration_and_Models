<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet', function () {
    return view('greet');
});

Route::get('/greet/{name}', function ($name) {
    return view('greet', ['name' => $name]);
});

Route::resource('tasks', TaskController::class);
