<?php 
        require_once 'router.php';

        use router\router;
    $router = new router();
    $router->add("GET", "/product", "ProductController@index");
    $router->add("GET", "/product/edit", "ProductController@find");
    $router->add("POST", "/product/edit", "ProductController@find");
    $router->add("GET", "/product/delete", "ProductController@delete");


    $router->solve();
?>