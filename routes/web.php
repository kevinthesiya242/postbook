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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/index','HomeController@temp')->name('index');

Route::get('category/view','CategoryController@view')->name('view');
Route::get('category/create','CategoryController@create')->name('create');
Route::get('category/show','CategoryController@show')->name('show');

Route::get('post/view','PostController@view')->name('view');
Route::get('post/create','PostController@create')->name('create');
Route::get('post/show','PostController@show')->name('show');

Route::resource('category','CategoryController');
Route::resource('post','PostController');

