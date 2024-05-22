<?php 
    class ProductController {
        public function index () {
            $data = (new Product)->getAll('SAN_PHAM');
            require_once './views/product/index.php';
        }
    }
?>