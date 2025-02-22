<?php 
    namespace App\Controllers\Client;
    use App\Models\User;
    use App\Core\Controller;
    use App\Core\Validator;

    class UserController extends Controller{
        protected $userModel;
        protected $tableName;
        public function __construct()
        {
            $this->userModel = new User();
            $this->tableName = 'users';
        }
    public function profile($id) {
        $user = new User();
        $userInfo = $user->getUserById($id);

        require_once __DIR__ ."/../views/userProfile.php";
    }

    public function login() {

        $this->viewRender('client/login');
        //debug(__DIR__ ."/../views/client/login.php");
        //require_once __DIR__ ."/../views/client/login.php";

    }

    public function signUp() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_name = $_POST['user_name'] ?? '';
            $password = $_POST['password']?? '';
            $email = $_POST['email']?? '';
            $confirmPassword = $_POST['confirmPassword']?? '';
            // validate form đăng ký
            $validator = new Validator();
            if (empty($user_name) || empty($password) || empty($email) || empty($confirmPassword)) {
                $validator->addError('required', 'Vui lòng điền đầy đủ thông tin');
            }
            if ($password!== $confirmPassword) {
                $validator->addError('password', 'Mật khẩu không trùng khớp');
            }
            if ($this->userModel->getUserByEmail($email)) {
                $validator->addError('email', 'Email đã tồn tại');
            }

            if ($validator->hasErrors()) {
                $_SESSION['error'] = $validator->getAllErrors();
                header("Location: ".BASE_URL."/login");
                exit;
            }

            $password = password_hash($password, PASSWORD_DEFAULT);
            $userParam = [
                'user_name' => $user_name,
                'password' => $password,
                'email' => $email
            ];
            $this->userModel->create($this->tableName, $userParam);
            header("Location: ".BASE_URL."/login");
            exit;
        }
    }

    public function signIn() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email']?? '';
            $password = $_POST['password']?? '';
            
            $user = $this->userModel->getUserByEmail($email);
            //debug($user);
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['user_name'];
                header("Location: ".BASE_URL."/");
                exit;
            } else {
                $validator = new Validator();
                $validator->addError('loginError', 'Sai tài khoản hoặc mật khẩu');
                $_SESSION['error'] = $validator->getAllErrors();
                header("Location: ".BASE_URL."/login");
                exit;
            }
        }
    }

    public function logout() {
        session_destroy();
        header("Location: ".BASE_URL."/");
        exit;
    }
    }
?>