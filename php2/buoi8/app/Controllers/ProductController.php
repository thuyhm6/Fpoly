<?php 
    namespace App\Controllers;

    use App\Models\Product;

    class ProductController extends Controller{
        public function detail($id) {
            $product = new Product();
            $productInfo = $product->getProductById($id);

            require_once __DIR__.'/../views/productDetail.php';
        }
    }
?>