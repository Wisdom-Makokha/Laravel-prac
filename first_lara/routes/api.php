<?php

use App\Http\Controllers\taskcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

$myroutes = [
    '/createTask',
    '/addTask',
    '/readTask',
    '/readATask',
    'updateTask',
    '/deleteTask'
];

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//create a route for the tasks api
Route::post($myroutes[0], [taskcontroller::class, 'createnewtask']);

//a second route to add tasks 
Route::post($myroutes[1], [taskcontroller::class, 'addnewtask']);

//create a route for reading all task
Route::get($myroutes[2], [taskcontroller::class, 'readalltasks']);

//create a route for reading a specific task
Route::get($myroutes[3], [TaskController::class, 'readatask']);

//update a task
Route::put($myroutes[4], [taskcontroller::class, 'updatetask']);

//delete a task
Route::delete($myroutes[5], [taskcontroller::class, 'deletetask']);