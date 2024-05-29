<?php 
    namespace controller; //đặt tên namspace

    use models\Product as A;  //Gọi ra class mà chúng ta muốn sử dụng

    class ProductController {

        public $productObject;
        public $tableName = "SAN_PHAM";

        function __construct()
        {
            $this->productObject = new A();
        }

        public function index () {            
            $data = $this->productObject->getAll($this->tableName);
            require_once './views/product/index.php';
        }

        public function delete() {
            $id = $_GET['ID'] ?? "";
            $this->productObject->delAll($this->tableName, $id);
            $baseUrl = BASE_URL;
            //require_once './views/product/index.php';
            header("location: $baseUrl/product");
            

        }

        public function find () {    
            $id = $_GET['ID'] ?? "";
            $data = $this->productObject->find($this->tableName, $id);
            
            require_once './views/product/edit.php';
        }

    }
?>