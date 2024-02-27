<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';

$router = new Chambereservation\Router($_SERVER['REQUEST_URI']);

// Users routes get

$router->get('/', 'UserController@index');
$router->get('/user/login', 'UserController@showLogin');
$router->get('/user/create', 'UserController@showCreate');
$router->get('/user/', 'UserController@showUserPanel');

// Admin routes get

$router->get('/user/admin', 'UserController@showAdminPanel');
$router->get('/user/admin/create-chamber', 'ChamberController@showAdminCreateChamber');

// Admin routes post 

$router->post('/user/admin/process-create-chamber', 'ChamberController@createChamber');
    
// user route post

$router->post('/user/create-process', 'UserController@createProcess');
$router->post('/user/login-process', 'UserController@loginProcess');
$router->get('/user/logout', 'UserController@logout');

$router->run();