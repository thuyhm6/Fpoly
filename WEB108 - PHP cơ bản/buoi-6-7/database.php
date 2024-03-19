<?php 
    define("db_host", "localhost");
    define("db_user", "root");
    define("db_password", "");
    define("db_name", "ql_ban_hang");

    //Dùng hàm mysqli_connect() để kết nối đến database
    $conn = mysqli_connect(db_host, db_user, db_password, db_name);
    //Dùng hàm mysqli_connect_error() để kiểm tra kết nối
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
    } 
    //echo "Connect successfull";
?>