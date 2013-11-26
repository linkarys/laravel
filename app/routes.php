<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('hello');
});

Route::get('debug', function() {
	return View::make('debug');
});

// Route::pattern('name', '\w+'); // 只对最近的一个route起作用
// Route::get('hello/{name?}', function($name = 'zhuxiaoya') {
// 	return View::make('greeting', array('name' => $name));
// });

// Route::get('user/{id}', function($id) {
// 	return 'Id ' . $id;
// })
// ->where('id', '\d+');

// Route::get('user/{name?}', function($name = 'John') {
// 	return 'Name ' . $name;
// })
// ->where('name', '\w+');

Route::controller('users', 'UsersController');