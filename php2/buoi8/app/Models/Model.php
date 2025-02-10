<?php 
    namespace App\Models;

    use PDO;
    use PDOException;

    class Model {
        protected static $pdo = null;

        public function __construct() {
            if (self::$pdo === null) {
                try {
                    self::$pdo = new PDO("mysql:host=" .DB_HOST.";dbname=" .DB_NAME. ";charset=utf8mb4", DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                } catch (PDOException $e) {
                    die("Lỗi kết nối database: ". $e->getMessage());
                }
            }
        }

        public function query($sql, $params = []) {
            $stmt = self::$pdo->prepare($sql);
            
            $stmt->execute($params);
            //var_dump($params);
            return $stmt;
        }
    }
?>