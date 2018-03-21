<?php

use Illuminate\Http\Request;

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

Route::get('/users', 'UserController@getAll');
Route::get('/user/{id}', 'UserController@getById');
Route::post('/user', 'UserController@add');
Route::put('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@delete');

Route::get('/items', 'ItemController@getAll');
Route::get('/item/{id}', 'ItemController@getById');
Route::post('/item', 'ItemController@add');
Route::put('/item/{id}', 'ItemController@update');
Route::delete('/item/{id}', 'ItemController@delete');
