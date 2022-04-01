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



$router->group(['as'=>'api.', 'prefix'=>'api'], function ()  use ($router) {
    $router->get('login/','UserController@authenticate');

    $router->get('buildings', ['uses' => 'BuildingController@index']);
    $router->get('buildings/{id}', ['uses' => 'BuildingController@show']);
    $router->post('buildings', ['uses' => 'BuildingController@store', 'middleware'=> 'role:System Admin']);
    $router->put('buildings/{id}', ['uses' => 'BuildingController@update', 'middleware'=> 'role:Manager']);
    $router->delete('buildings/{id}', ['uses' => 'BuildingController@destroy']);


    $router->get('deliveries', ['uses' => 'DeliveryController@index']);
    $router->get('deliveries/{id}', ['uses' => 'DeliveryController@show']);
    $router->post('deliveries', ['uses' => 'DeliveryController@store']);
    $router->put('deliveries/{id}', ['uses' => 'DeliveryController@update']);
    $router->delete('deliveries/{id}', ['uses' => 'DeliveryController@destroy']);

    $router->get('locations', ['uses' => 'LocationController@index']);
    $router->get('locations/{id}', ['uses' => 'LocationController@show']);
    $router->post('locations', ['uses' => 'LocationController@store']);
    $router->put('locations/{id}', ['uses' => 'LocationController@update']);
    $router->delete('locations/{id}', ['uses' => 'LocationController@destroy']);

    $router->get('machines', ['uses' => 'MachineController@index']);
    $router->get('machines/{id}', ['uses' => 'MachineController@show']);
    $router->post('machines', ['uses' => 'MachineController@store']);
    $router->put('machines/{id}', ['uses' => 'MachineController@update']);
    $router->delete('machines/{id}', ['uses' => 'MachineController@destroy']);

    $router->get('packages', ['uses' => 'PackageController@index']);
    $router->get('packages/{id}', ['uses' => 'PackageController@show']);
    $router->post('packages', ['uses' => 'PackageController@store']);
    $router->put('packages/{id}', ['uses' => 'PackageController@update']);
    $router->delete('packages/{id}', ['uses' => 'PackageController@destroy']);

    $router->get('roles', ['uses' => 'RoleController@index']);
    $router->get('roles/{id}', ['uses' => 'RoleController@show']);
    $router->post('roles', ['uses' => 'RoleController@store']);
    $router->put('roles/{id}', ['uses' => 'RoleController@update']);
    $router->delete('roles/{id}', ['uses' => 'RoleController@destroy']);

    $router->get('users', ['uses' => 'UserController@index']);
    $router->get('users/{id}', ['uses' => 'UserController@show']);
    $router->post('users', ['uses' => 'UserController@store']);
    $router->put('users/{id}', ['uses' => 'UserController@update']);
    $router->delete('users/{id}', ['uses' => 'UserController@destroy']);


    $router->group(['as'=>'admin.', 'prefix'=>'admin', 'middleware'=> 'role:System Admin'], function ()  use ($router) {
        $router->post('execute', ['uses' => 'AdminController@exec']);
        $router->post('enviroment', ['uses' => 'AdminController@enviroment']);
    });
});
