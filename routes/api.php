<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//GET    /tasks              - List all tasks
//GET    /tasks/:id          - Get one task
//POST   /tasks              - Create task
//PATCH  /tasks/:id/toggle   - Toggle completed status
//GET    /categories         - List all categories

Route::get('tasks',[TaskController::class,'index']);
Route::get('task/{id}',[TaskController::class,'task']);
Route::post('tasks',[TaskController::class,'create']);
Route::patch('task/{id}/toggle',[TaskController::class,'toggle']);
Route::get('categories',[TaskController::class,'category']);

