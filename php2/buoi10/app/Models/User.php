<?php 
    namespace App\Models;

    class User extends Model{
        public function getUserById($id) {
            $sql = "SELECT * FROM users WHERE id = :id";
            $param = ["id" => $id];
            $stmt = $this->query($sql, $param);
            return $stmt;
        }
    }
?>