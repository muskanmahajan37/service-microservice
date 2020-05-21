<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('categories', 'CategoryController@store');
$router->get('categories','CategoryController@index');
$router->get('categories/{category}','CategoryController@show');
$router->put('categories/{category}','CategoryController@update');
$router->get('categories/{category}/subcategories', 'SubCategoryController@findByCategory');


$router->post('subcategories', 'SubCategoryController@store');
$router->get('subcategories/{subcategory}', 'SubCategoryController@show');
$router->put('subcategories/{subcategory}', 'SubCategoryController@update');

$router->post('services', 'ServiceController@store');
$router->get('services', 'ServiceController@index');
$router->get('services/{service}','ServiceController@show');
$router->patch('services/{service}','ServiceController@update');
$router->delete('services/{service}','ServiceController@destroy');

