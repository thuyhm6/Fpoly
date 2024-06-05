<?php 
    require_once 'router.php'; //nạp router.php vào

    use router\router; //gọi lớp router (bởi vì có đặt namespace cho router)
    $router = new router(); //Tạo đối tượng router

    //gọi những hàm add() để thêm những luồng điều hướng
    $router->add("GET", "/product", "ProductController@index");
    $router->add("POST", "/product", "ProductController@index");
    $router->add("GET", "/product/edit", "ProductController@find");
    $router->add("POST", "/product/edit", "ProductController@find");
    $router->add("GET", "/product/create", "ProductController@create");
    $router->add("POST", "/product/create", "ProductController@create");
    $router->add("GET", "/product/delete", "ProductController@delete");

    //Kiểm tra và thực hiện việc điều hướng
    $router->solve();
?>