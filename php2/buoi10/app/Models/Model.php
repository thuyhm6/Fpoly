<?php 
    namespace App\Models;

    use PDO;

    class Model {
        protected static $pdo = null;
        public function __construct(){
            self::$pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4", DB_USER, DB_PASS);
        }

        public function query($sql, $param = []) {
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute($param);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
?>