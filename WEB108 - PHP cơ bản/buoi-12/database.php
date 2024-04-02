<?php 
    define("db_host","localhost");
    define("db_user","root");
    define("db_pass","");
    define("db_name","ql_ban_hang");

    $conn = mysqli_connect(db_host, db_user, db_pass, db_name);
    if (mysqli_connect_error()) {
        echo "Không thể kết nối";
    } else {
        //echo "Kết nối thành công";
    }
?>