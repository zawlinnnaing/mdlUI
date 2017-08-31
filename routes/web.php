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
Route::get('/admin','adminpanelcontroller@index')->middleware('auth.basic');

Route::get('/','postsController@index');
Route::get('/posts','postsController@index')->name('posts.index');
Route::get('/posts/details/{id}','postsController@details')->name('posts.details');
Route::get('/posts/add', 'postsController@add')->name('posts.add');
Route::post('/posts/insert','postsController@insert')->name('posts.insert');
Route::get('/posts/edit/{id}','postsController@edit')->name('posts.edit');
Route::post('/posts/update/{id}','postsController@update')->name('posts.update');
Route::get('/posts/delete/{id}','postsController@delete')->name('posts.delete');


Route::get('/photos','postsPhotosController@index')->name('photos.index');
Route::get('/photos/details/{id}','postsPhotosController@details')->name('photos.details');
Route::get('/photos/add', 'postsPhotosController@add')->name('photos.add');
Route::any('/photos/insert','postsPhotosController@insert')->name('photos.insert');
Route::get('/photos/edit/{id}','postsPhotosController@edit')->name('photos.edit');
Route::post('/photos/update/{id}','postsPhotosController@update')->name('photos.update');
Route::get('/photos/delete/{id}','postsPhotosController@delete')->name('photos.delete');

Route::get('/announcements','anouncementController@index')->name('announcements.index');
Route::get('/announcements/add', 'anouncementController@add')->name('announcements.add');
Route::post('/announcements/insert','anouncementController@insert')->name('announcements.insert');
Route::get('/announcements/delete/{id}','anouncementController@delete')->name('announcements.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/academic', 'HomeController@academic');
Route::get('/about', 'HomeController@about');
Route::get('/postList','HomeController@postList');
Route::get('/post/{id}','HomeController@post');

Route::get('/departments/archi', 'HomeController@archi');
Route::get('/departments/ceit', 'HomeController@ceit');
Route::get('/departments/che', 'HomeController@che');
Route::get('/departments/civil', 'HomeController@civil');
Route::get('/departments/ec', 'HomeController@ec');
Route::get('/departments/eng', 'HomeController@eng');
Route::get('/departments/ep', 'HomeController@ep');
Route::get('/departments/ir', 'HomeController@ir');
Route::get('/departments/maths', 'HomeController@maths');
Route::get('/departments/mech', 'HomeController@mech');
Route::get('/departments/mecha', 'HomeController@mecha');
Route::get('/departments/myan', 'HomeController@myan');
Route::get('/research','HomeController@research');

