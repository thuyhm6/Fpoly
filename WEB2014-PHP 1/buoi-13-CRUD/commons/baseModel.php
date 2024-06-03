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

        public function updateByID($tableName, $id, $data) {
            $tenSanPham = $data['ten_san_pham'];
            $gia = $data['gia'];
            //Thầy để sẵn cái gợi ý ở đây để a e triển khai tiếp xem nhé
            $colums = [];
            foreach ($data as $key => $value) {
                if($key !== 'ma_san_pham') {
                    $colums[] = "$key= :$key";
                }
            }
            //debug(implode(", ", $colums));
            //$sql = "UPDATE $tableName SET ".implode(",", $colums)." WHERE MA_SAN_PHAM = ?";
            $sql = "UPDATE SAN_PHAM SET ".implode(", ", $colums)."  WHERE MA_SAN_PHAM = :ma_san_pham";
            //debug($sql);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
        }

        public function create($tableName, $data) {
            //debug(implode(", ", array_keys($data)));
            $colums = [];
            foreach($data as $key => $value) {
                $colums[]  = ":$key";
            }
            //debug($colums);
            // $sql = "INSERT INTO $tableName (1 đống cột) VALUES (giá trị tương ứng của 1 đống cột)";
            $sql = "INSERT INTO $tableName (". implode(", ", array_keys($data)) .") VALUES (". implode(", ", $colums) .")";
            //debug($sql);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);

        }

        
    }
?>