<?php 
    class OrderController {
        public $table = 'ORDER';
        public function index() {
            $data = (new Order)->getAll($this->table);
            require_once './views/order/index.php';
        }

        public function delAll() {
            (new Order)->delAll($this->table);
            header('index.php');
        }
    }
?>