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
    $router->group(['prefix' => 'album'], function () use ($router) { 
        $router->post('/create', 'AlbumController@create');
        $router->post('/update/{id}', 'AlbumController@update');
        $router->delete('/delete/{id}', 'AlbumController@destroy');
    });
    $router->group(['prefix' => 'article'], function () use ($router) { 
        // $router->post('/create', 'ArticleController@create');
        // $router->post('/update/{id}', 'ArticleController@update');
        // $router->delete('/delete/{id}', 'ArticleController@destroy');
    });
});

$router->group(['prefix' => 'album'], function () use ($router) { 
    $router->get('/', 'AlbumController@index');
    $router->get('/{id}', 'AlbumController@show');
});