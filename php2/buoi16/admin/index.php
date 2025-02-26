<?php
session_start();
    require_once __DIR__ . '/../app/autoload.php';
    require_once __DIR__ . '/../config.php';
    
    use App\Router;
    
    $router = new Router();
    
    require_once __DIR__ . '/../routes/admin.php';
    $url = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
    //var_dump($url);
    $router->dispatch($url, $_SERVER['REQUEST_METHOD']);
?>