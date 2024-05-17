<?php 
    require_once './commons/env.php';
    require_once './commons/function.php';
    
    autoloadFile('./controllers/');
    autoloadFile('./models/');

    //$action = isset($_GET['act']) ? $_GET['act'] : '/';
    $action = $_GET['act'] ?? '/';  
    match($action) {
        '/' => home(),
        'product' => showProduct(),
        default => require_once '404.html'
    };

    //echo BASE_URL;
?>

<!-- <h1>Đây là trang điều hướng</h1> -->