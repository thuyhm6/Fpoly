<?php
namespace App\Controllers\Admin;
use App\Models\Product;
use App\Models\File;
use App\Core\Controller;

class ProductController extends Controller {
    protected $productModel;
    protected $tableName;

    public function __construct() {
        $this->productModel = new Product();
        $this->tableName = 'products'; // Tên bảng sản phẩm

    }

    // Hiển thị danh sách sản phẩm (có tìm kiếm)
    public function list() {
        $keyword = $_GET['keyword'] ?? '';
        $products = $this->productModel->search($keyword);

        $fileModel = new File();
        foreach($products as &$product) {
            // $fileParam = [
            //     'type' => 'product',
            //     'type_id' => $product['id']
            // ];
            //$product['image'] =  $fileModel->getFileInfo($fileParam); Cách 1
            $product['image'] =  $fileModel->getFileInfo(['type' => 'product',  'type_id' => $product['id']
            ]); // Cách 2

        }

        // var_dump($products);
        //require_once __DIR__ . "/../../views/admin/products.php";
        $this->viewRender('admin/products', ['products' => $products]);
    }

    // Hiển thị form thêm sản phẩm
    public function create() {
        require_once __DIR__ . "/../../views/admin/product_create.php";
    }

    // Xử lý thêm sản phẩm
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productID = $this->productModel->create($this->tableName, $_POST);
            //Thêm hình ảnh
            if(!empty($_FILES['images']['name'][0])) {
                $uploadDir = "uploads/products/";
                //Tạo đưuòng dẫn $uploadDir khi đưuòng dẫn này chưa tồn tại
                if(!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                //Lưu hình ảnh vào đường dẫn $uploadDir
                foreach($_FILES['images']['name'] as $key => $imageName) {
                    $tmpName = $_FILES['images']['tmp_name'][$key];
                    $imagePath = $uploadDir.time(). "_". $imageName;
                    move_uploaded_file($tmpName, $imagePath);

                    //Thêm file vào trong bảng files
                    $fileParam = [
                        'type' => 'product',
                        'type_id' => $productID,
                        'file_path' => $imagePath,
                        'file_name' => $imageName
                    ];
            //debug($fileParam);

                    $this->productModel->create('files', $fileParam);
                }
            }
            header("Location: ". BASE_URL."/admin/product/list");
            exit;
        }
    }

    // Hiển thị form chỉnh sửa sản phẩm
    public function edit($id) {
        $product = $this->productModel->getById($id);
        require_once __DIR__ . "/../../views/admin/product_edit.php";
    }

    // Xử lý cập nhật sản phẩm
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST['id'] = $id;
            $this->productModel->update($this->tableName, $_POST);
            header("Location: ".BASE_URL."/admin/product/list");
            exit;
        }
    }

    // Xử lý xóa sản phẩm
    public function delete($id) {
        $this->productModel->delete($this->tableName,$id);
        header("Location: ".BASE_URL."/admin/product/list");
        exit;
    }
}
?>
