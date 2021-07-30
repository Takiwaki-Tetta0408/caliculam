<?php

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

Route::get('/categories/create', 'CategoryController@create');
Route::get('/categories/{category}', 'TodoController@index');
Route::get('/categories/{category}/todos/create', 'TodoController@create');
Route::delete('/categories/{category}/todos/{todo}', 'TodoController@destroy');
Route::get('/categories/{category}/todos/{todo}','TodoController@show');
Route::post('/categories/{category}/todos','TodoController@store');
