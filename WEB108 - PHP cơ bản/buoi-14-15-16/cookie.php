<?php 
session_start();
    //Thêm mới 1 cookie với thời gian tồn tại là 10 ngày
    setcookie("user", "thuyhm", time() + 10*24*60*60);
    //Sửa lại cookie
    setcookie("user", "Hà Minh Thủy", time() + 10*24*60*60, "/"); //Khi thêm "/" (patch) thì có thể truy cập cookie ở mọi nơi trong domain.
    //Xóa cookie
    //setcookie("user", "Hà Minh Thủy", time() -10);
    //Gọi ra
    echo "Xim chào ".$_COOKIE['user'];

    
    //echo $_SESSION['usernam'];

    
?>