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

//get('comments/create', 'CommentsController@create');
//post('comments', 'CommentsController@store');

Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');
Route::resource('tags', 'TagsController');

Route::get('/', 'PostsController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);