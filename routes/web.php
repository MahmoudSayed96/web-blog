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

// Pages
Route::get('/', 'pagesController@index');
Route::get('/about', 'pagesController@about');
Route::get('/services', 'pagesController@services');

// Posts
Route::resource('posts','PostsController');

// User
Route::get('/user/profile','UserController@show')->name('user.show');
Route::post('/user/profile/update','UserController@update')->name('user.update');

// Authontaction
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
