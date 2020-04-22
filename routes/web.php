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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

//post
Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post/store','PostController@store')->name('post.store');
//category


Route::get('/category/edit/{id}','categoriesController@edit')->name('categories.edit');
Route::get('/category/delete/{id}','categoriesController@destroy')->name('categories.destroy');
Route::get('/category/create','categoriesController@create')->name('category.create');
Route::post('/category/store','categoriesController@store')->name('category.store');
Route::get('/categories','categoriesController@index')->name('categories');
Route::post('/category/update/{id}','categoriesController@update')->name('category.update');


});