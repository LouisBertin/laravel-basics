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

Route::get('/posts/add', 'PostController@add')->name('posts.add');
Route::get('/posts/show', 'PostController@show')->name('posts.show');

/**
 * FORMS
 */
Route::post('/posts/addclassic', 'PostController@addclassic')->name('post.add.classic');

/**
 * AJAX CALLS
 */
Route::post('/posts/add/ajax', 'PostController@store');
