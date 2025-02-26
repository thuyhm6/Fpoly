<?php 
    namespace App\Controllers\Client;

use App\Core\Controller;

    class HomeController extends Controller{
        public function index() {
            $data = [
                "title" => "Trang chủ",
                "content" => "Chào mừng đến với trang chủ!",
                'view' => '/home'
            ];
            $this->viewRender("client/main", $data);
        }
    }
?>