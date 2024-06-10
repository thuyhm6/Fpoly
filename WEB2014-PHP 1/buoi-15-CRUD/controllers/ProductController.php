<?php 
    namespace controller; //đặt tên namspace

    use models\Product as A;  //Gọi ra class mà chúng ta muốn sử dụng
use PDO;

    class ProductController {
        public $productObject;
        public $tableName = "SAN_PHAM";
        public $baseUrl = BASE_URL;

        function __construct()
        {
            $this->productObject = new A();
        }

        public function index () {            
            $data = $this->productObject->getAll($this->tableName);
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
                $data = $this->productObject->selectByParam($this->tableName, $_GET);
            }
            //debug($data);
            require_once './views/product/index.php';
        }

        public function delete() {
            $id = $_GET['ID'] ?? "";
            $this->productObject->delAll($this->tableName, $id);
            $baseUrl = BASE_URL;
            //require_once './views/product/index.php';
            header("location: $this->baseUrl/product");
            

        }

        public function find () {
            $id = $_GET['ID'] ?? "";
            //Kiểm tra xem có đang bấm nút Lưu với phương thức POST hay không?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //gọi hàm phương thức updateByID của Model (Product)
                //debug($_POST);
                $this->productObject->updateByID($this->tableName, $id, $_POST);
                
                header("location: $this->baseUrl/product");
                return;
            }
            $data = $this->productObject->find($this->tableName, $id);
            require_once './views/product/edit.php';
        }

        public function create() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // echo '<pre>';
                // print_r($_FILES);
                // debug();
                if (isset($_FILES) && $_FILES['hinh_anh']['size'] > 0){
                    $fileExtension = strtolower(pathinfo($_FILES['hinh_anh']['name'], PATHINFO_EXTENSION));
                    
                    if(in_array($fileExtension, ['jpg', 'png', 'gif'])) {
                        $dir = "asset/img";
                        $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                        $file_name = basename($_FILES['hinh_anh']['name']);
                        $_POST['hinh_anh'] = "$dir/$file_name";
                        move_uploaded_file($tmp_name, "$dir/$file_name");
                    } else {
                        echo "File tải lên phải là file ảnh!";
                        return;
                    }                   
                }
                //return;
                //Thực hiện câu lệnh Insert
                $this->productObject->create($this->tableName, $_POST);
                header("location: $this->baseUrl/product");
                //return;
            }
            require_once './views/product/create.php';
        }
    }
?>