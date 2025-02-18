<?php
$router->get('/', 'Client\HomeController@index');
$router->get('/product/:id', 'Client\ProductController@detail');
