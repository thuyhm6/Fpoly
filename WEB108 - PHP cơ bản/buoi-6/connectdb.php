<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    define("db_host", "localhost");
    define("db_user", "root");
    define("db_password", "");
    define("db_name", "ql_ban_hang");

    //Dùng hàm mysqli_connect() để kết nối đến database
    $conn = mysqli_connect(db_host, db_user, db_password, db_name);
    //Dùng hàm mysqli_connect_error() để kiểm tra kết nối
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
    } 
    //echo "Connect successfull";

    $sql = "select * from san_pham;";
    //Dùng hàm mysqli_query để lấy thông tin câu lệnh SQL khi thực hiện
    $result = mysqli_query($conn, $sql);
    //Dùng hàm mysqli_query để lấy dữ liệu khi chạy câu lệnh $sql
    $sanPhams = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<table>
    <thead>
        <tr>
            <td>Tên sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Hình ảnh</td>
            <td>Số lượng</td>
        </tr>
    </thead>
    <tbody>
    <!-- Dùng foreach để duyệt từng dòng dữ liệu -->
    <?php foreach($sanPhams as $sanPham):?>
        <tr>
            <td><?= $sanPham['ten_san_pham'] ?></td>
            <td><?= $sanPham['gia'] ?></td>
            <td><img width="50px" src="<?= $sanPham['hinh_anh'] ?>" alt=""></td>
            <td><?= $sanPham['so_luong'] ?></td>
        </tr>
        <?php endforeach;?>
        
    </tbody>
</table>




</body>
</html>