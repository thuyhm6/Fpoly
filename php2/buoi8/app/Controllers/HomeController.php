<?php 
    namespace App\Controllers;

    class HomeController extends Controller{
        public function index() {
            require_once __DIR__.'/../views/home.php';
        }
    }
?>