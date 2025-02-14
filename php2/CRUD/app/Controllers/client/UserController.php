<?php 
    namespace App\Controllers\Client;
    use App\Models\User;

    class UserController extends Controller{
    public function profile($id) {
        $user = new User();
        $userInfo = $user->getUserById($id);

        require_once __DIR__ ."/../views/userProfile.php";
    }
    }
?>