<?php 
    class ProductController {
        public function index () {
            $ProductObject = new Product();
            
            $data = $ProductObject->getAll('SAN_PHAM');


            require_once './views/product/index.php';
        }
    }
?>