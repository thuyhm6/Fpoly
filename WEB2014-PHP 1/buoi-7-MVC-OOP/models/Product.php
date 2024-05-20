<?php 
    class Product {
        public function getAll() {
            $db_host = DB_HOST;
            $db_name = DB_NAME;
            $conn = new PDO("mysql:host=$db_host;dbname=$db_name", DB_USER, DB_PASS);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $sql = "SELECT * FROM SAN_PHAM";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>