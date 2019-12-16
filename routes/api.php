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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function(){
    // Get all posts
    Route::get('posts','PostsController@index');
    // Get single posts
    Route::get('post/{id}','PostsController@show');
    // Create new posts
    Route::post('post','PostsController@store');
    // Update post
    Route::put('post','PostsController@store');
    // Delete post
    Route::delete('post/{id}','PostsController@destroy');
});

