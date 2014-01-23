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

Route::resource('home', 'HomeController');

Route::resource('/', 'HomeController');

Route::get('db', function() {
	// $result = DB::select('select * from project')->first();
	// $result = Project::all();
	$res = Post::with('comment')->get();
	r($res[0]->comment);
});

Route::controller('users', 'UsersController');

Route::resource('posts', 'PostsController');

Route::resource('dogs', 'DogsController');

Route::resource('merry', 'MerryController');

Route::resource('sunshine', 'Sunshine');

Route::resource('grudens', 'GrudensController');

