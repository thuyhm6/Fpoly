<?php
namespace App\Models;
use PDO;

class Product extends Model {
    
    // Lấy toàn bộ sản phẩm hoặc tìm kiếm theo tên
    public function search($param = []) {
        $sql = "SELECT * FROM products WHERE pro_name LIKE :keyword";
        return $this->queryPaginator($sql, $param)->fetchAll();
    }

    public function getProductTotal($param = []) {
        $sql = "SELECT COUNT(1) as total FROM products WHERE pro_name LIKE :keyword";
        return $this->query($sql, $param)->fetch()['total'];
    }

    // Lấy sản phẩm theo ID
    public function getById($id) {
        $sql = "SELECT * FROM products WHERE id = :id";
        return $this->query($sql, ["id" => $id])->fetch();
    }

    // Thêm sản phẩm mới
    public function createProduct($name, $price) {
        $sql = "INSERT INTO products (pro_name, price) VALUES (:name, :price)";
        $this->query($sql, ["name" => $name, "price" => $price]);
    }

    // Cập nhật sản phẩm
    public function updateProduct($id, $name, $price) {
        $sql = "UPDATE products SET pro_name = :name, price = :price WHERE id = :id";
        $this->query($sql, ["id" => $id, "name" => $name, "price" => $price]);
    }

    // Xóa sản phẩm
    public function deleteProduct($id) {
        $sql = "DELETE FROM products WHERE id = :id";
        $this->query($sql, ["id" => $id]);
    }
}
?>
