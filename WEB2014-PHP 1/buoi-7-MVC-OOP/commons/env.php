<?php 
    //Database infomation
    define("DB_HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PASS", '');
    define("DB_NAME", 'ql_ban_hang');

    //echo $_SERVER['HTTP_HOST'];
    $protocol;
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    define("BASE_URL",$protocol.$_SERVER['HTTP_HOST'].'\buoi-7-MVC-OOP');
?>