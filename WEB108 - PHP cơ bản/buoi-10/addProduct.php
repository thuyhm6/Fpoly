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
        if (isset($_POST['confirm'])) {
            $maSanPham = $_POST['maSanPham'];
            $tenSanPham = $_POST['tenSanPham'];
            $soLuong = $_POST['soLuong'];
            $gia = $_POST['gia'];

            $sql = "INSERT INTO SAN_PHAM (ma_san_pham, ten_san_pham, gia, so_luong) VALUE ('$maSanPham','$tenSanPham','$gia','$soLuong')";

            $ressult = mysqli_query($conn, $sql);
            if ($ressult == false) {
                echo "Thêm sản phẩm không thành công";
            } else {
                //Khi gặp header thì chuyển hướng về file producs.php
                header("location: ?page=connectdb");
            }
        }
    ?>
    <form action="addProduct.php" method="post">
        <p>Mã sản phẩm: 
            <input type="text" name="maSanPham">
        </p>
        <p>Tên sản phẩm: 
            <input type="text" name="tenSanPham">
        </p>
        <p>Giá: 
            <input type="text" name="gia">
        </p>
        <p>Số lượng: 
            <input type="text" name="soLuong">
        </p>
        <button name="confirm">Xác nhận</button>
    </form>
</body>
</html>