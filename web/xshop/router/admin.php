<?php 
    autoLoad('./src/controllers/admin/');
    autoLoad('./src/models/');

    $router->add("GET", "admin", "/admin", "AdminController@dashboard");
    $router->add("GET", "admin", "/admin/category", "CategoryController@index");

    $router->solve("admin");
?>