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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


    
Route::get('/','TemplateController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

//route for post



Route::get('/posts','PostController@index')->name('posts');
Route::get('/post/trashed','PostController@trashed')->name('post.trashed');
Route::get('/post/hdelete/{id}','PostController@hdelete')->name('post.hdelete');
Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');
Route::get('/post/create','PostController@create')->name('post.create');


Route::post('/post/store','PostController@store')->name('post.store');
Route::get('/post/delete/{id}','PostController@destroy')->name('post.destroy');

Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');
Route::post('/post/update/{id}','PostController@update')->name('post.update');


//route for category

Route::get('/category/delete/{id}','categoriesController@destroy')->name('categories.destroy');
Route::get('/category/create','categoriesController@create')->name('category.create');
Route::post('/category/store','categoriesController@store')->name('category.store');
Route::get('/categories','categoriesController@index')->name('categories');
Route::get('/category/edit/{id}','categoriesController@edit')->name('categories.edit');
Route::post('/category/update/{id}','categoriesController@update')->name('category.update');



//route for tag

Route::get('/tag/delete/{id}','TagController@destroy')->name('tag.destroy');
Route::get('/tag/create','TagController@create')->name('tag.create');
Route::post('/tag/store','TagController@store')->name('tag.store');
Route::get('/tag','TagController@index')->name('tags');
Route::get('/tag/edit/{id}','TagController@edit')->name('tag.edit');
Route::post('/tag/update/{id}','TagController@update')->name('tag.update');

//users 
Route::get('/users','UsersController@index')->name('users');
Route::get('/users/admin/{id}','UsersController@admin')->name('users.admin');
Route::get('/users/notadmin/{id}','UsersController@notadmin')->name('user.not.admin');
Route::get('/users/create','UsersController@create')->name('users.create');
Route::post('/users/store','UsersController@store')->name('users.store');


// settings 

Route::get('/settings','SettingsContoller@index')->name('settings');
Route::post('/settings/update','SettingsContoller@update')->name('settings.update');



// template 



     });

