<?php
require 'controllers/UserController.php';
require 'router/router.php';

session_start();
$controller = new UserController();
$router = new router();

$router->get('/','list');
$router->post('/create','create');
$router->delete('/delete','delete');
$router->get('/view','view');
$router->patch('/edit','edit');


$router->routing();

