<?php 
    namespace App\Models;

    class Product extends Model {
        public function getProductById($id) {
            $result = null;
            $sql = "SELECT * FROM products WHERE id = :idd";
            $stmt = $this->query($sql, ["idd" => $id]);
            //var_dump($stmt->fetch());
            $result =  $stmt->fetch();
            if (!$result) {
                die("Không tìm thấy sản phẩm");
            }

            return $result;
        }
    }
?>