<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


use \App\Models\Task;

Route::get('/', [HomeController::class, 'tasks']);

Route::get('/task/{id}', [TasksController::class, 'task']);

Route::get('/news', [NewsController::class, 'news']);