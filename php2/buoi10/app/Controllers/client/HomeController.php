<?php 
    namespace App\Controllers\Client;
    class HomeController {
        public function index() {
            require_once __DIR__.'/../../views/client/home.php';
        }
    }
?>