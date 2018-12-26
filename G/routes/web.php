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
Route::resource('dashboard', 'DashboardController');

// Route::resource('student', 'StudentController');

Route::resource('event', 'EventController');

Route::resource('group', 'GroupController');

Route::resource('chat', 'ChatController');

Route::resource('q&a', 'QnaController');

Route::resource('admin', 'AdminController');

Route::resource('student', 'StudentController');


Route::resource('home', 'HomeController');


Route::get('student/{student}/delete','StudentController@destroy');

Route::resource('message', 'MessageController');



