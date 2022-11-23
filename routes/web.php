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


$router->get('/getData', function () use ($router) {
    $data = [
        "data" => "hello",
        "Status" => "OK",
    ];
    return response()->json($data);
});

$router->get('/getData2', function () use ($router) {
    $data_user = DB::select("SELECT * FROM employees");
    $data = [
        "data" => $data_user,
        "Status" => "OK",
    ];
    return response()->json($data);
});




$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/getData3', 'EmployeesController@index');
    $router->post('/addNew', 'EmployeesController@create');
    $router->put('/edit', 'EmployeesController@edit');
    $router->delete('/delete', 'EmployeesController@delete');
});