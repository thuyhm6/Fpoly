<?php 
    namespace App\Models;

    class User extends Model {
        public function getUserById($id){
            $sql = "SELECT * FROM users where id = :id";
            $stmt = $this->query($sql, ["id" => $id]);
            return $stmt->fetch();
        }
    }
?>