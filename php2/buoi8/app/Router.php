<?php 
    namespace App;

    class Router {
        public static function route($url) {
            $pattern = "#^/(?<controller>[a-zA-Z]+)/(?<action>[a-zA-Z]+)/?(?<id>\d+)?$#";
            if (preg_match($pattern, $url, $matches)) {
                $controller = ucfirst($matches['controller']) ."Controller";
                $action = $matches['action'];
                $id = $matches['id'] ?? null;

                $controllerClass = "App\\Controllers\\". $controller;
                if (class_exists($controllerClass) && method_exists($controllerClass, $action)) {
                    $controllerInstance = new $controllerClass;
                    $controllerInstance->$action($id);
                } else {
                    die("404 - Không tìm thấy trang");
                }
            } else {
                $home = new \App\Controllers\HomeController();
                $home->index();
            }
        }
    }
?>