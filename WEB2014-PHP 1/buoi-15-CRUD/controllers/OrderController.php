<?php 
    namespace controller;

    use models\Order;
    class OrderController {
        public $orderObject;
        public $tableName = "DON_HANG";
        public $baseUrl = BASE_URL;

        function __construct()
        {
            $this->orderObject = new Order();
        }

        public function index () {            
            $data = $this->orderObject->getAll($this->tableName);
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
                $data = $this->orderObject->selectByParam($this->tableName, $_GET);
            }
            //debug($data);
            require_once './views/order/index.php';
        }

        public function delete() {
            $id = $_GET['ID'] ?? "";
            $this->orderObject->delAll($this->tableName, $id);
            $baseUrl = BASE_URL;
            //require_once './views/order/index.php';
            header("location: $this->baseUrl/order");
            

        }

        public function find () {
            $id = $_GET['ID'] ?? "";
            //Kiểm tra xem có đang bấm nút Lưu với phương thức POST hay không?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //gọi hàm phương thức updateByID của Model (order)
                //debug($_POST);
                $this->orderObject->updateByID($this->tableName, $id, $_POST);
                
                header("location: $this->baseUrl/order");
                return;
            }
            $data = $this->orderObject->find($this->tableName, $id);
            require_once './views/order/edit.php';
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
                $this->orderObject->create($this->tableName, $_POST);
                header("location: $this->baseUrl/order");
                //return;
            }
            require_once './views/order/create.php';
        }
    }
?>