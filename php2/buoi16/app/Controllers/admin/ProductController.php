<?php
namespace App\Controllers\Admin;
use App\Models\Product;
use App\Models\File;
use App\Core\Controller;
use App\Core\Paginator;
use App\Core\Validator;
use App\Views\Components\PaginationView;

class ProductController extends Controller {
    protected $productModel;
    protected $tableName;

    public function __construct() {
        $this->productModel = new Product();
        $this->tableName = 'products'; // Tên bảng sản phẩm

    }

    // Hiển thị danh sách sản phẩm (có tìm kiếm)
    public function list() {
        $param = [];
        $keyword = $_GET['keyword'] ?? '';
        $param['keyword'] = "%$keyword%";
        $productTotal = $this->productModel->getProductTotal($param);
        $paginator = new Paginator($_GET['limit'] ?? 5, $_GET['page']?? 1, $productTotal);

        $param['limit'] = $paginator->getLimit();
        $param['offset'] = $paginator->getOffset();

        $products = $this->productModel->search($param);
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
        $paginationHtml = PaginationView::render($paginator);
        $this->viewRender('admin/main', [
            'products' => $products,
            'paginationHtml' => $paginationHtml,
            'title' => 'Danh sách snar phẩm',
            'view' => '/product/list'
        ]);
    }

    // Hiển thị form thêm sản phẩm
    public function create() {
        $this->viewRender('admin/main', [
            'title' => 'Thêm mới sản phẩm',
            'view' => '/product/create'
        ]);
    }

    // Xử lý thêm sản phẩm
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Check dữ liệu nhập vào
            extract($_POST);
            $validator = new Validator();
            //var_dump($pro_code);
            if (empty($pro_code)) {
                $validator->addError('pro_code','Mã sản phẩm không được để trống');
            }
            if (empty($pro_name)) {
                $validator->addError('pro_name','Tên sản phẩm không được để trống');
            }

            if ($validator->hasErrors()) {
                $_SESSION['error'] =  $validator->getAllErrors();
                header("Location: ". BASE_URL."/admin/product/create");
                exit;
            }


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
        require_once __DIR__ . "/../../views/admin/product/edit.php";
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
