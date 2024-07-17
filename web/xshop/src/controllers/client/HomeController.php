<?php 
namespace controllers\client;
use models\Home;
    class HomeController {
        public $modelObject;
        public function __construct()
        {
            $this->modelObject = new Home();
        }

        public function index() {
            unset($_SESSION['admin']);
            require_once './src/views/client/home/home.php';
        }
    }
?>