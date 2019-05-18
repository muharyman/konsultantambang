<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'admin'], function () use ($router) { 
    $router->get('/album/create', 'AlbumController@create');
    $router->get('/album/update/{id}', 'AlbumController@update');
    $router->get('/album/delete/{id}', 'AlbumController@destroy');
});

$router->get('/album', 'AlbumController@index');
$router->get('/album/{id}', 'AlbumController@show');
