<?php 
    class ProductController {
        //public $modelName = new Product();
        function showProduct() {
            $data = (new Product)->getAll();
            //debug($data);
            require_once './views/product/list.php';
        }

    }
?>