<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //session_start();
        if (isset($_POST['login'])) {
            $userNam = $_POST['userName'];
            $pass = $_POST['pass'];
            if ($userNam == "admin" && $pass == "admin") {
                setcookie("userName", $userNam, time() + 1000);
                header("location: index.php");
            }
        }
    ?>

    <form action="login.php" method="post">
        <div class="group-input">
            <label for="">Tên đăng nhập: </label>
            <input type="text" name="userName">
        </div>
        <div class="group-input">
            <label for="">Mật khẩu: </label>
            <input type="password" name="pass">
        </div>
        <button name="login">Đăng nhập</button>
    </form>
</body>
</html>