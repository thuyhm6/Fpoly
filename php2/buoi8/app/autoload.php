<?php 
    spl_autoload_register(function ($class) {
        $class = str_replace("App\\", "", $class);
        $class = str_replace("//", "", $class);
        
        $file = __DIR__.'/' .$class . '.php';
        //var_dump($file);
        if (file_exists($file)) {
            require_once $file;
        }
    })
?>