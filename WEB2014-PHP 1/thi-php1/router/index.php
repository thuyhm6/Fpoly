<?php 
    require_once 'router.php';
    use router\router;

    $route = new router();

    $route->add("GET", "/", "UserController@index");

    $route->solve();
?>