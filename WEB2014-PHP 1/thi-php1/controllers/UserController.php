<?php 
    namespace controller;
    use models\User;
    class UserController{

        public function index() {
            $userModel = new User();
            $userData = $userModel->getAll();
            require_once './views/user/index.php';
        }
    }
?>