<?php
//Bật session lên
session_start();
//Tạo session
//$_SESSION['usernam'] = "thuyhm";

//Sửa session
$_SESSION['usernam'] = "thuykhonghm";
$_SESSION['email'] = "thuyhm@gmail.com";

//Xóa session
//unset($_SESSION['usernam']);
//Xóa cả làng
//session_unset();
//session_destroy();

//Hiển thị ra
echo $_SESSION['usernam'];
echo $_SESSION['email'];
echo $_COOKIE['user'];
//session_write_close();
?>