<?php
namespace App\Controllers\Admin;
use App\Models\Product;

class ProductController {
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
        require_once __DIR__ . "/../../views/admin/products.php";
    }

    // Hiển thị form thêm sản phẩm
    public function create() {
        require_once __DIR__ . "/../../views/admin/product_create.php";
    }

    // Xử lý thêm sản phẩm
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->productModel->create($this->tableName, $_POST);
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
