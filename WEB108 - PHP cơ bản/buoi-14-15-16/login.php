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
        include "database.php";
        $loginFail = "";
        if (isset($_POST['login'])) {
            //Đây là cách đối chiếu user name và pass nhập vào với database
            $userName = $_POST['userName'];
            $pass = $_POST['pass'];
            $sql = "SELECT * FROM SYS_USER WHERE USER_NAME = ? AND PASSWORD = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, 'ss', $userName, $pass);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $_SESSION['userName'] = $userName;
                    setcookie("userName",$userName, time() + 30*24*60*60);
                    header("location: index.php");
                    //echo "<script>window.location.href='index.php';</script>";
                } else {
                    $loginFail = "Đăng nhập thất bại";
                }
                
            } else {
                $loginFail = "Đăng nhập thất bại";
            }
            //mysqli_stmt_get_result($stmt);
        }
    ?>

    <p><?= $loginFail ?></p>

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
        <a href="signup.php">Đăng ký</a>
    </form>
</body>
</html>
