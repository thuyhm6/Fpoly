<?php 
namespace model;
use PDO;
    class model {
        public $conn;
        public $db_host = "localhost";
        public $db_name = "php2";
        public $db_pass = "";
        public $db_user = "root";

        //dùng construct để mỗi lần tạo đối tượng thì phương thức construct được tự động gọi.
        public function __construct() {
            $this->conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
        }

        public function getProduct() {
            $sql = "SELECT * FROM san_pham";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function deleteProduct($id) {
            $sql = "DELETE FROM san_pham WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }
    }
?>