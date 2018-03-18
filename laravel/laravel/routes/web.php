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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
	return view('form');
});

Route::get('/users',function() {
	return view('users');
});

Route::get('/users', "UserController@getUsers");

Route::get('/user/delete/{id}', "UserController@delete");

Route::post('/register', "UserController@register");

Route::get('/user/edit/{id}', function(){
	return view('edit');
});

Route::get('/user/edit/{id}', "UserController@getUser");

Route::post('/update/{id}', "UserController@update");