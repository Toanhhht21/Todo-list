<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [TodoListController::class, 'index']);





use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);


use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
