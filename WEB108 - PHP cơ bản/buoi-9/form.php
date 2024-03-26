<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $user = '';
        $alert = '';
        // Phương thức GET
        if (isset($_GET['send'])) {
            echo "Từ khóa vừa nhập là: " .$_GET['search'];
        }
        // Phương thức POST
        if (isset($_POST['search'])) {
            echo "Từ khóa vừa nhập là: " .$_POST['search'];
        }

        // Tính tổng 2 số
        $result = '';
        $so1 = '';
        $so2 = '';
       if (isset($_POST['tong'])) {
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];

        $result = "Tổng của 2 số là: ". $_POST['so1'] + $_POST['so2'];
       }

       //Xử lý đăng nhập
       
       if (isset($_POST['login'])) {
            if ($_POST['user'] === "admin" && $_POST['pass'] == 1111) {
                $alert = "Đăng nhập thành công";
            } else {
                $user = $_POST['user'];
                $alert = "ID hoặc mật khẩu không đúng";
            }
       }
        
    ?>

    <p>Phương thức GET</p>
    <form action="form.php" method="get">
        <input type="text" name="search">
        <button name="send">Gửi</button>
    </form>
    <p>Phương thức Post</p>
    <form action="form.php" method="post">
        <input type="text" name="search">
        <button>Gửi</button>
    </form>
    <p>Cộng 2 số</p>
    <form action="form.php" method="post">
        <input type="text" name="so1" value="<?= $so1 ?>" required>
        <input type="text" name="so2" value="<?= $so2 ?>" required>
        <button name="tong">Tổng</button>
    </form>
    <span><?= $result ?></span>
    <p>Đăng nhập</p>
    <form action="form.php" method="post">
        <input type="text" name="user" placeholder="Mời bạn nhập ID" value="<?php echo $user ?>">
        <input type="password" name="pass" value="" placeholder="Mời bạn nhập Password">
        <button name="login">Đăng nhập</button>
    </form>
    <p><?= $alert ?></p>

    
</body>
</html>