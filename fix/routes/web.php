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
Route::get('/gallery', 'AlbumController@index');

// masih pakai direct function dulu
Route::get('/add-article', function() {
    return view('admin.add-article');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/admin-about', function() {
    return view('admin.about');
});

