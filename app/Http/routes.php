<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::model('post', 'App\Post');
//get('posts', ['as' => 'posts_path', 'uses' => 'PostsController@index']);
//get('post/{id}', ['as' => 'post_path', 'uses' => 'PostsController@show']);
//get('post/{id}/edit', ['as' => 'post_edit_path', 'uses' => 'PostsController@edit']);
//patch('post/{id}', 'PostsController@update');

$router->resource('posts', 'PostsController');