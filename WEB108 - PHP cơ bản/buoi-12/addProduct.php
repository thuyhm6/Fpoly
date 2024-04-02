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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $maSP = mysqli_escape_string($conn,$_POST['maSP']);
            $tenSP = mysqli_escape_string($conn, $_POST['tenSP']);
            $giaSP = mysqli_escape_string($conn, $_POST['giaSP']);
            $sql = "INSERT INTO SAN_PHAM (MA_SAN_PHAM, TEN_SAN_PHAM, GIA) VALUES (?,?,?)";
            //Chuẩn bị tham số đế truyền vào
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt == false) {
                echo mysqli_error($conn);
            } else {
                //Truyền tham số tương ứng với mỗi dấu ? ở trên
                //s là chữ, i là số
                mysqli_stmt_bind_param($stmt, "ssi", $maSP, $tenSP, $giaSP);
                //Thực thi
                if (mysqli_stmt_execute($stmt)){
                    //Chuyển hướng
                    //$_SERVER['HTTP_HOST'] chính là lấy tên domain
                    header("Location: http://".$_SERVER['HTTP_HOST']."/buoi-12/products.php");
                } else {
                    echo mysqli_error($conn);
                }
            }
            //dùng cách thức cũ để thêm dữ liệu (cách này sẽ không an toàn) 
            // $excute = mysqli_query($conn, $sql);
            // if ($excute == false) {
            //     echo mysqli_error($conn);
            // } else {
            //     //Chuyển hướng
            //     header("Location: http://".$_SERVER['HTTP_HOST']."/buoi-12/products.php");
            // }
        }
    
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Mã sản phẩm: </label>
        <input type="text" name="maSP"><br/>
        <label for="">Tên sản phẩm: </label>
        <input type="text" name="tenSP"><br/>
        <label for="">Giá sản phẩm: </label>
        <input type="text" name="giaSP"><br/>
        <button>Thêm mới</button>
    </form>
    
</body>
</html>