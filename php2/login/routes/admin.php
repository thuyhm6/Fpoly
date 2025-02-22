<?php
use App\Middleware\AuthMiddleware;

AuthMiddleware::checkLogin();

$router->get('/admin', 'Admin\DashboardController@index');
$router->get('/admin/product/list', 'Admin\ProductController@list');
$router->get('/admin/product/create', 'Admin\ProductController@create');
$router->post('/admin/product/store', 'Admin\ProductController@store');
$router->get('/admin/product/edit/:id', 'Admin\ProductController@edit');
$router->post('/admin/product/update/:id', 'Admin\ProductController@update');
$router->get('/admin/product/delete/:id', 'Admin\ProductController@delete');
