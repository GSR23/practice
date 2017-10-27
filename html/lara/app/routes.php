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

Route::get('/', function()
{
	return View::make('hello');
});
//Home Route
Route::get('blog', ['as' => 'blog.index','uses' => 'TestController@index']);
// Showing all Posts
Route::get('blog/allposts', ['as' => 'blog.all.posts','uses' => 'TestController@show_posts']);
//Create Post
Route::get('blog/create', ['as' => 'blog.create','uses' => 'TestController@create']);
//Store Post
Route::post('blog', ['as' => 'blog.post.insert','uses' => 'TestController@store']);
//Show Post
Route::get('blog/{id}', ['as' => 'blog.post','uses' => 'TestController@show']);
//Edit Post
Route::get('blog/{id}/edit', ['as' => 'blog.post.edit','uses' => 'TestController@edit']);
//Update Post
Route::put('blog/{id}', ['as' => 'blog.post.update','uses' => 'TestController@update']);
//Delete Post
Route::delete('blog/{id}', ['as' => 'blog.post.delete','uses' => 'TestController@destroy']);
// Route::resource('blog', 'TestController');
