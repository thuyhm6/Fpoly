<?php 
    namespace controllers\admin;

    class CategoryController {
        public function index() {
            //$_SESSION['admin'] = 1;
            require_once './src/views/admin/category/index.php';
        }
    }
?>