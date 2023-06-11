<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\TaskController@index');

Route::get('/tasks', 'App\Http\Controllers\TaskController@index');
Route::post('/store', 'App\Http\Controllers\TaskController@store');
Route::post('/edit/{task}', 'App\Http\Controllers\TaskController@edit');
Route::post('/update', 'App\Http\Controllers\TaskController@update');
Route::post('/task/{task}', 'App\Http\Controllers\TaskController@delete');
