<?php 
    //echo $_SERVER['HTTP_HOST'];
    $protocol;
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    define("BASE_URL",$protocol.$_SERVER['HTTP_HOST'].'\buoi-6-MVC-basic');
?>