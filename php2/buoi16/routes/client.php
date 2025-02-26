<?php
$router->get('/', 'Client\HomeController@index');
$router->get('login/', 'Client\UserController@login');
$router->post('signUp/', 'Client\UserController@signUp');
$router->post('login/signIn/', 'Client\UserController@signIn');
$router->post('logout/', 'Client\UserController@logout');
$router->get('/product/:id', 'Client\ProductController@detail');
