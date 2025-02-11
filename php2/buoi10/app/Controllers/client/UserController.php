<?php 
    namespace App\Controllers\Client;

    use App\Models\User;

    class UserController {
        public function profile($id = '1'){
            $user = new User();
            $userInfo = $user->getUserById($id);

            require_once __DIR__."/../views/userProfile.php";
        }
    }
?>