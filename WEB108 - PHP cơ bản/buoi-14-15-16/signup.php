<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        include "database.php";
        $errorMess = [];
        if (isset($_POST['signup'])) {
            $email = $_POST['email'];
            $userName = $_POST['userName'];
            $pass = $_POST['password'];
            //check dữ liệu
            function checkValid($email, $userName, $pass) {
                $errorMess = [];
                if (empty($email)) {
                    $errorMess[] = "Email không thể trống";
                };
                if (empty($userName)) {
                    $errorMess[] = "Tên đăng nhập không thể trống";
                };
                if (empty($pass)) {
                    $errorMess[] = "Mật khẩu không thể trống";
                };
                return $errorMess;
            };
            $errorMess = checkValid($email, $userName, $pass);

            //print_r($errorMess);

            if (empty($errorMess)) {
                $sql = "INSERT INTO SYS_USER (USER_NAME, PASSWORD, EMAIL) VALUES (?,?,?)";
                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt == false) {
                    echo mysqli_error($conn);
                } else {
                    mysqli_stmt_bind_param($stmt, "sss", $userName, $pass, $email);
                    if (mysqli_stmt_execute($stmt)) {
                        header("location: login.php");
                    }
                }
            }

            
        }
    ?>
    <?php foreach($errorMess as $errorMes):?>
        <p style="color: red;"><?= $errorMes ?></p>
    <?php endforeach;?>
    
    <form action="" method="post">
        <input type="email" name="email" placeholder="Địa chỉ email" ><br/>
        <input type="text" name="userName" placeholder="Tên đăng nhập" ><br/>
        <input type="password" name="password" placeholder="Mật khẩu" ><br/>
        <button name="signup">Đăng ký</button>
    </form>
</body>
</html>