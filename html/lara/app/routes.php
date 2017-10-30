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
Route::get('blog', ['as' => 'blog.index','uses' => 'PostController@index']);
//About
Route::get('about', function()
{
	return View::make('posts.about');
});
//Contact
Route::get('contact', function()
{
	return View::make('posts.contact');
});

//Blog CRUD
Route::resource('blog', 'PostController');
// Showing all Posts
Route::get('allposts', ['as' => 'blog.all.posts','uses' => 'PostController@show_posts']);
//UserAuth
Route::get('login', ['as' => 'login','uses' => 'UserController@login']);
Route::post('login', ['as' => 'login_log','uses' => 'UserController@login_log']);

Route::get('signup', ['as' => 'signup','uses' => 'UserController@signup']);
Route::post('signup', ['as' => 'signup_up','uses' => 'UserController@signup_up']);

Route::get('logout', ['as' => 'blog.logout','uses' => 'UserController@logout']);

//Categories
Route::resource('categories', 'CategoryController');


//Legacy Way
// Route::group(array('before' => 'auth'), function()
// {
// //Create Post
// Route::get('blog/create', ['as' => 'blog.create','uses' => 'PostController@create']);
// //Show Post
// Route::get('blog/{id}', ['as' => 'blog.post','uses' => 'PostController@show']);
// //Store Post
// Route::post('blog', ['as' => 'blog.post.insert','uses' => 'PostController@store']);
// //Update Post
// Route::put('blog/{id}', ['as' => 'blog.post.update','uses' => 'PostController@update']);
// // Route::put('blog/{id}', ['as' => 'blog.post.update','uses' => 'PostController@update','before'=>'csrf']);
// //Delete Post
// Route::delete('blog/{id}', ['as' => 'blog.post.delete','uses' => 'PostController@destroy']);
// //Edit Post
// Route::get('blog/{id}/edit', ['as' => 'blog.post.edit','uses' => 'PostController@edit']);
// // Using Resource Controller
// // Route::resource('blog', 'PostController');


// });
