<?php 
    require_once 'router.php';
    use router\router;

    $router = new router();

    $router->add("GET", "/", "BookController@index");
    $router->add("GET", "/book/delete", "BookController@delete");
    $router->add("GET", "/book/create", "BookController@create");
    $router->add("POST", "/book/create", "BookController@create");
    $router->add("GET", "/book/edit", "BookController@edit");
    $router->add("POST", "/book/edit", "BookController@edit");

    $router->solve();
?>