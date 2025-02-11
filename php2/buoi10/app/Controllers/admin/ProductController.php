<?php 
    namespace App\Controllers\Admin;

    class ProductController {

        public function list() {
            require_once __DIR__ .'/../../views/admin/products.php';
        }
    }
?>