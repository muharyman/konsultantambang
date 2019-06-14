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

Route::get('/', 'ArticleController@index');
Route::get('/add-article', 'ArticleController@addform');
Route::post('/post-add-article', 'ArticleController@create');

Route::get('/gallery', 'AlbumController@index');
Route::get('/admin-album', 'AlbumController@admin');
Route::get('/add-album', 'AlbumController@addform');
Route::post('/post-add-album', 'AlbumController@create');
Route::get('/edit-album/{id}', 'AlbumController@editform');
Route::post('/post-edit-album/{id}', 'AlbumController@update');
Route::get('/delete-album/{id}', 'AlbumController@destroy');

Route::get('/about', function() {
    return view('about');
});

Route::get('/admin-about', function() {
    return view('admin.about');
});

