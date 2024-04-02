<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Lấy ra phwuong thức kết nối và domain -->
    <?php 
        if (isset($_SERVER['https']) && $_SERVER['https'] == 'on') {
            echo 'Bạn đang dùng phương thức https';
        } else {
            echo 'Bạn đang dùng phương thức http';
        }
       echo $_SERVER['HTTP_HOST'];
    ?>
    <?php 
    $errorMess = [];
        if (isset($_POST['confirm'])) {
            if ($_POST['userName'] != 'admin') {
                $errorMess[] = "Bạn sai tên đăng nhập";
            }
            if ($_POST['pass'] != 'admin') {
                $errorMess[] = "Bạn sai mật khẩu";
            }
        }
        
        //print_r($errorMess);

        //Check khi thực hiện bấm vào nút ở trong form với phwuong thức POST
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     echo "REQUEST_METHOD";
        // }
    ?>
    <!-- <?php $_SERVER['PHP_SELF']?> để action đến chính nó -->
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="userName"><br/>
        <label for="">Mật khẩu</label>
        <input type="password" name="pass"><br/>
        <button name="confirm">Xác nhận</button>
        <!-- <button >Hủy</button> -->
    </form>

    <?php foreach($errorMess as $errorMes):?>
    <p><?= $errorMes ?></p>
    <?php endforeach?>
    
</body>
</html>