<?php 
namespace router;
    class router {
        public $baseUrl = "/php1/thi-php1";
        public $routes = [];
        function add($method, $path, $handle) {
            $this->routes[] = [
                'method' => $method,
                'path' => $path,
                'handle' => $handle
            ];
            
        }
        function solve() {
            $requestMethod =  $_SERVER['REQUEST_METHOD'];
            $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $requestPath = str_replace($this->baseUrl, "", $requestPath);
            foreach ($this->routes as $route) {
                if ($route['method'] == $requestMethod && $route['path'] == $requestPath) {
                    //hàm list để gán các biến bên trong vào các giá trị của mảng theo thứ tự.
                    //hàm explode để chuyển chuỗi thành mảng.
                    list($controller, $method) = explode("@", $route['handle']);
                    $controller = "controller\\$controller"; // phải thêm controller\\ bởi vì có để namspace
                    
                    //hàm để gọi phương thức $method trong lớp $controller
                    call_user_func_array([new $controller, $method], []);
                    return;
                }
            }

            
        }
    }
?>