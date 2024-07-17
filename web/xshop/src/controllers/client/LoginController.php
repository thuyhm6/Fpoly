<?php 
    namespace controllers\client;

    use models\Login;

    class LoginController {
        public $modelObject;
        public $baseUrl = BASE_URL;
        public function __construct()
        {
            $this->modelObject = new Login();
        }
        public function changeLogin() {
            require_once './src/views/login/changeLogin.php';
        }

        public function updateAccount() {
            require_once './src/views/login/updateAccount.php';
        }

        public function login() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $accountInfo = $this->modelObject->findUser($_POST) ?? [];
                if ($accountInfo  === false) {
                    $loginFailMess = "Sai tên truy cập hoặc mật khẩu";
                    
                    require_once './src/views/login/login.php';
                } else {
                    //debug($accountInfo['user_name']);
                    $_SESSION['user_name'] = $accountInfo['user_name'];
                    $_SESSION['image'] = $accountInfo['image'];
                    $_SESSION['role'] = $accountInfo['role'];
                    header("location: $this->baseUrl/");
                }
            } else {
                require_once './src/views/login/login.php';
            }            
            
        }

        public function logout() {
            session_unset();
            header("location: $this->baseUrl/");
        }
    }
?>