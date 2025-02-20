<?php 
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'php2');
    define('DB_USER', 'root');
    define('DB_PASS', '');


    define('BASE_URL', '/php2/mvc');

    function debug($message) {
        echo '<pre>';
        print_r($message);
        echo '</pre>';
        die();
    }
    
?>