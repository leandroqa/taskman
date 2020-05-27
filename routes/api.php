<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('projects', 'ProjectController@index')->name('projects.index');
Route::post('projects', 'ProjectController@store')->name('projects.store');
Route::get('projects/{id}', 'ProjectController@show')->name('projects.show');
Route::put('projects/{project}', 'ProjectController@markAsCompleted')->name('projects.update');
Route::post('tasks', 'TaskController@store')->name('tasks.store');
Route::put('tasks/{task}', 'TaskController@markAsCompleted')->name('tasks.update');
