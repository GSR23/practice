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

// Route::group(array('before' => 'auth'), function()
// {
	// Showing all Posts
	Route::get('blog/allposts', ['as' => 'blog.all.posts','uses' => 'TestController@show_posts']);
	//Create Post
	Route::get('blog/create', ['as' => 'blog.create','uses' => 'TestController@create']);
	//Show Post
	Route::get('blog/{id}', ['as' => 'blog.post','uses' => 'TestController@show']);
	//Store Post
	Route::post('blog', ['as' => 'blog.post.insert','uses' => 'TestController@store']);
	//Update Post
	Route::put('blog/{id}', ['as' => 'blog.post.update','uses' => 'TestController@update']);
	// Route::put('blog/{id}', ['as' => 'blog.post.update','uses' => 'TestController@update','before'=>'csrf']);
	//Delete Post
	Route::delete('blog/{id}', ['as' => 'blog.post.delete','uses' => 'TestController@destroy']);
	//Edit Post
	Route::get('blog/{id}/edit', ['as' => 'blog.post.edit','uses' => 'TestController@edit']);
	// Using Resource Controller
	// Route::resource('blog', 'TestController');
	Route::get('logout', ['as' => 'blog.logout','uses' => 'UserController@logout']);

// });

//Home Route
Route::get('blog', ['as' => 'blog.index','uses' => 'TestController@index']);

Route::get('login', ['as' => 'blog.login','uses' => 'UserController@login']);
Route::post('login', ['as' => 'blog.login_log','uses' => 'UserController@login_log']);

Route::get('signup', ['as' => 'blog.signup','uses' => 'UserController@signup']);
Route::post('signup', ['as' => 'blog.signup_up','uses' => 'UserController@signup_up']);
