<?php 
    namespace controllers\admin;
    class AdminController {
        public function dashboard() {
            $_SESSION['admin'] = 1;
            require_once './src/views/admin/dashboard.php';
        }
    }
?>