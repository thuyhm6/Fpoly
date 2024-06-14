<?php 
    namespace controller;

use model\Book;
    
    class BookController {
        public $modelObject;
        public function __construct()
        {
            $this->modelObject = new Book;
        }
        public function index() {
            $data = (new Book)->index();
            require_once './views/book/index.php';
        }

        public function delete() {
            $id = $_GET['id'] ?? "";
            $this->modelObject->delete($id);
            header("location: /thi/"); // cần xử lý lại
        }

        public function create() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //debug($_FILES['cover_image']);
                $_POST['cover_image'] = "./img/".$_FILES['cover_image']['name'];
                $tmp_name = $_FILES['cover_image']['tmp_name'];
                $dir = "./img/".$_FILES['cover_image']['name'];
                move_uploaded_file($tmp_name, $dir);
                $this->modelObject->create();
                header("location: /thi/"); // cần xử lý lại

            } else {
                require_once './views/book/create.php';
            }
            
        }
        public function edit() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_FILES['cover_image']) && $_FILES['cover_image']['size'] > 0) {
                    $_POST['cover_image'] = "./img/".$_FILES['cover_image']['name'];
                }
                $tmp_name = $_FILES['cover_image']['tmp_name'];
                $dir = "./img/".$_FILES['cover_image']['name'];
                move_uploaded_file($tmp_name, $dir);
                $this->modelObject->edit();
            header("location: /thi/"); // cần xử lý lại

            } else {
                $id = $_GET['id'] ?? "";
                $data = (new Book)->find($id);
                require_once './views/book/edit.php';
            }
            
        }
    }
?>