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
use App\Event;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('DataInDB', function () {
//     // $res=DB::table('events')->get();
//     $res=Event::all();
//     return view('data', compact('res'));
// });
Route::get('DataInDB', 'UsersController@ShowEvent');
Route::get('DataInDB/{id_data}', 'UsersController@ShowEventRow');

Route::get('/Site', 'SitesController@ShowHomePage');
Route::get('/Site/Create', 'SitesController@CreatePost');
Route::post('/Site', 'SitesController@StorePost');
Route::get('Site/{id}', 'SitesController@ShowPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
