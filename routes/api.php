<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/test', [TestController::class, 'getTestHuman'])->middleware('test.middleware');
Route::get('/test/{id}', [TestController::class, 'getTestHumanWithId']);

Route::get('/tasks', [TaskController::class, 'getTasks']);
Route::get('/tasks/{id}', [TaskController::class, 'getTaskWithId']);

Route::post('/tasks', [TaskController::class, 'createTask']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);


// user 
// Route::post('register', [UserController::class, 'register']);

Route::get('/users', [UserController::class, 'getUsers']);
Route::post('/users', [UserController::class, 'createUser']);

