<?php 
    namespace App\Models;

    class User extends Model {
        public function getUserById($id){
            $sql = "SELECT * FROM users where id = :id";
            $stmt = $this->query($sql, ["id" => $id]);
            return $stmt->fetch();
        }

        public function getUserByEmail($email){
            $sql = "SELECT id, user_name, email, password FROM users WHERE email = :email";
            return $this->query($sql, ['email' => $email])->fetch();
        }
    }
?>