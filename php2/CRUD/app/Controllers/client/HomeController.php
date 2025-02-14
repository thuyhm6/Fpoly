<?php 
    namespace App\Controllers\Client;

    class HomeController extends Controller{
        public function index() {
            $data = [
                "title" => "Trang chủ",
                "content" => "Chào mừng đến với trang chủ!"
            ];
            $this->viewRender("client/home", $data);
        }
    }
?>