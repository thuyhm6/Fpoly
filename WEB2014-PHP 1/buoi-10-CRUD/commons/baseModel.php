<?php 
    namespace commons;

    use PDO;
    
    class baseModel {
        public $conn;
        public function __construct()
        {
            $db_host = DB_HOST;
            $db_name = DB_NAME;

            $this->conn = new PDO("mysql:host=$db_host;dbname=$db_name", DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        public function getAll($tableName) {
            
            $sql = "SELECT * FROM $tableName";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function delAll($tableName, $id) {
            $sql = "DELETE FROM $tableName where ma_san_pham = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            //return $stmt->fetchAll();
        }

        public function find($tableName, $id) {
            
            $sql = "SELECT * FROM $tableName where ma_san_pham = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }
    }
?>