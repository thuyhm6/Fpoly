<?php 
namespace models;

use PDO;

    class User{
        public $db_host = "localhost";
        public $db_name = "pa001_examphp1";
        public $db_user = "root";
        public $db_pass = "";

        public function connectDB() {
            $conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
        }

        public function getAll() {
            $sql = "select * from users";
            $stmt = $this->connectDB()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }



    }
?>