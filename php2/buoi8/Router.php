<?php 
    class Router {
        private $routes= [];

        public function add($path, $params) {
            $this->routes[] = [
                "path" => $path,
                "params" => $params
            ];
        }

        public function match($path) {
            foreach($this->routes as $route) {
                if ($route['path'] == $path) {
                    return $route['params'];
                }

                return false;
            }
        }
    }
?>