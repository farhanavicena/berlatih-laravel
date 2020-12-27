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



Route::get('/hello-laravel', function(){
	return "Hello Laravel";
});


Route::get('/home', 'HomeController@home');

Route::get('/register', 'AuthController@regist');

Route::post('/welcome', 'AuthController@form');






Route::get('/master', function(){
	return view('adminlte.master');
});


Route::get('/', function(){
	return view('halaman1');
});

Route::get('/data-tables', function(){
	return view('halaman2');
});