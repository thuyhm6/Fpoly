<?php 
    namespace App\Models;

    class File extends Model {
        public function getFileInfo($param) {
            extract($param);
            //var_dump($type_id);
            //$sql = "SELECT * FROM files WHERE type = :type AND type_id = :type_id";
            $sql = "SELECT * FROM files WHERE type = '$type' AND type_id = $type_id";
            return $this->query($sql)->fetchAll();
        }
    }
?>