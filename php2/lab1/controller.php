<?php 

namespace controller;
use model;
require_once 'model.php';
    class controller {

        public $model;

        public function __construct() {
            $this->model = new model\model();
        }

        public function getProductController() {
            $data = $this->model->getProduct();
            require_once 'view.php';
        }

        public function getCategory() {
            require_once 'viewCategory.php';
        }

        public function getReport() {
            require_once 'viewReport.php';
        }

        public function  getPage($page) {
            
            require_once $page.".php";
        }

        public function deleteProduct($id) {
            $this->model->deleteProduct($id);
        }
    }
?>