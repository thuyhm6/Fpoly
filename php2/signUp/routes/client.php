<?php
$router->get('/', 'Client\HomeController@index');
$router->get('login/', 'Client\UserController@login');
$router->post('signUp/', 'Client\UserController@signUp');
$router->post('signIn/', 'Client\UserController@signIn');
$router->get('/product/:id', 'Client\ProductController@detail');
