<?php 
    autoLoad('./src/controllers/client/');
    autoLoad('./src/models/');

    $router->add("GET", "client", "/", "HomeController@index");
    $router->add("GET", "client", "/login", "LoginController@login");
    $router->add("POST", "client", "/login", "LoginController@login");
    $router->add("GET", "client", "/logout", "LoginController@logout");
    $router->add("GET", "client", "/changeLogin", "LoginController@changeLogin");
    $router->add("GET", "client", "/updateAccount", "LoginController@updateAccount");
    $router->add("GET", "client", "/productDetail", "ProductController@productDetail");

    $router->solve("client");
?>