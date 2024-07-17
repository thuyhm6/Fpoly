<?php 
namespace models;

use commons\baseModel;

    class Login extends baseModel{
        public function findUser($data) {
            $sql = "SELECT * FROM USERS WHERE USER_ID = :user_id AND PASSWORD = :password";
            return parent::pdoQuery($sql, $data);
            
        }
    }
?>