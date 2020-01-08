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
    phpinfo();
    return $router->app->version();    
});

$router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
    $router->group(['prefix'=> 'auth'],function()use ($router){

        // Matches "/api/auth/register
        $router->post('register', 'AuthController@register');
    
        // Matches "/api/auth/login
        $router->post('login', 'AuthController@login');
    });
    
    $router->group(['prefix'=>'user'],function() use ($router){
        // Matches "/api/user/profile
        $router->get('profile', 'UserController@profile');

        // Matches "/api/user/users/1 
        //get one user by id
        $router->get('single/{id}', 'UserController@singleUser');

        // Matches "/api/user/users
        $router->get('allusers', 'UserController@allUsers');

    });
    
 });
