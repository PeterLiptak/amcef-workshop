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


// Blog routes
Route::get('/', 'PostsController@index');

Route::get('/posts/{id}', function ($id) {

    $post = DB::table('posts')->find($id);

    return view('post', compact('post'));
});

// Admin routes
Route::group(['prefix' => 'admin'], function() {

    Route::get('/', 'adminController@index');

    Route::get('/posts/data', 'PostsController@data');

    Route::get('/posts/{id}/edit', 'PostsController@edit');
});
