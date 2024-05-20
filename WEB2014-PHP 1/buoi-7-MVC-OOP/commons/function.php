<?php 
    function debug($param){
        echo "<pre>";
        print_r($param);
        die();
    }
    function autoloadFile($pathFile) {
        //scandir($pathFile) - Lấy ra tất cả các file nằm trong thư mục đường dẫn $pathFile
        //array_diff() - Lấy ra những phần tử không giống với những phần tử phía sau (mời xem chatGPT).
        $files = array_diff(scandir($pathFile), ['.','..']);
        foreach ($files as $file) {
            require_once $pathFile.$file;
        }
    }
?>