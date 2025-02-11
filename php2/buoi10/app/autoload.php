<?php 
    spl_autoload_register(function ($class) {
        // $class  = str_replace("App\\", "", $class);

        // $file = __DIR__.'/'.$class.'.php';
        // var_dump($file);

        $prefix = 'App\\';
        $baseDir = __DIR__.'/';

        if (strpos($class, $prefix) == 0) {
            $newClass = substr($class, strlen($prefix));
            $file = $baseDir.str_replace('\\', '/', $newClass).'.php';
            //var_dump($file);
            if (file_exists($file)) {
                require_once $file;
            }
        }

        
    })
?>