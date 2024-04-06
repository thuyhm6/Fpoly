<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        //$_SESSION['cart'] = 0;
        if (isset($_POST['addCart'])){
            $_SESSION['cart'] ++;
        }

        if (isset($_POST['logout'])) {
            setcookie("userName","", time() -10);
            header("location: http://localhost:3000/buoi-14/login.php");
        }

    ?>
    <?php 
        if (isset($_COOKIE['userName'])): 
            echo "Xin chào: ".$_COOKIE['userName'];         
    ?>
    <form action="" method="post">
        <button name="logout">Đăng xuất</button>
    </form>
    <?php else: ?>
        <a href="http://localhost:3000/buoi-14/login.php">Đăng nhập</a>
        
    <?php endif;?>
    <form action="" method="post">
        <button name="addCart">Thêm giỏ hàng</button>
    </form>
    <p>Giỏ hang: <?= $_SESSION['cart'] ?></p>
</body>
</html>