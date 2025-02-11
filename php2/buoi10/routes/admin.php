<?php 
    $router->get("/admin/product", "Admin\ProductController@list");
    $router->get("/admin/product/update", "Admin\ProductController@update");
    $router->post("/admin/product/update", "Admin\ProductController@update");
?>