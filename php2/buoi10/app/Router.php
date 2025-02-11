<?php 
    namespace App;

    class Router {
        protected $routes = [];

        public function get($url, $action) {
            $this->routes['GET'][$url] = $action;
        }

        public function post($url, $action) {
            $this->routes['POST'][$url] = $action;
        }


        public function route($requestUrl, $requestMethod){
            // http://localhost/php2/mvc/user/profile
            //$pattern = "#^/(?<controller>[a-z]+)/(?<action>[a-z]+)/?(?<id>\d+)?$#";
            //var_dump($this->routes);

            foreach ($this->routes[$requestMethod] as $route => $action) {
                $pattern = "#^".$route. "$#";
                //var_dump($requestUrl);
                if(preg_match($pattern, $requestUrl, $matches)) {
                //if(preg_match($pattern, $requestUrl, $matches)) {
                    //var_dump($matches);
                
                    [$controller, $method] = explode('@', $action);
                    $controller = "App\\Controllers\\".$controller;
                    if (!class_exists(($controller))) {
                        die("Controller $controller không tồn tại");
                    }
                    $controllerInstance = new $controller();
                    if (!method_exists($controllerInstance, $method)) {
                        die("Method $method không tồn tại");
                    }
                    
                    return call_user_func_array([$controllerInstance, $method], []);
                } else {
                    // die("404 - Không tìm thấy trang");
                    //$home = new \App\Controllers\HomeController();
                    //$home->index();
                }
            }

            
        }
    }
?>