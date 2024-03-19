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
        echo $_GET['ma_san_pham'];
        //Câu lệnh để lấy dữ liệu từ database
        $sql_product = "SELECT * FROM SAN_PHAM WHERE MA_SAN_PHAM = '".$_GET['ma_san_pham']."'";
        //Lấy dữ liệu từ database, dựa vào câu lệnh ở trên
        $result_product = mysqli_query($conn, $sql_product);
        //print_r($result_product);
        //Chuyển dữ liệu sang dạng mảng
        $productInfo = mysqli_fetch_array($result_product);
        //print_r($productInfo);

    ?>

    <p>Tên sản phẩm: <?= $productInfo['ten_san_pham'] ?></p>
    <p>Hình ảnh: </p>
    <p>Giá: </p>
    <p>Số lượng: </p>
</body>
</html>