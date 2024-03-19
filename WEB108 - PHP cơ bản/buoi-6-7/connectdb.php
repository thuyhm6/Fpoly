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
    include "database.php";

    $sql = "select * from san_pham;";
    //Dùng hàm mysqli_query để lấy thông tin câu lệnh SQL khi thực hiện
    $result = mysqli_query($conn, $sql);
    //Dùng hàm mysqli_fetch_all để lấy dữ liệu khi chạy câu lệnh $sql
    $sanPhams = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if  (empty($sanPhams)) {
        echo "Không có dữ liệu";
    }
?>

<table>
    <thead>
        <tr>
            <td>Tên sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Hình ảnh</td>
            <td>Số lượng</td>
            <td>Thao tác</td>
        </tr>
    </thead>
    <tbody>
    <!-- Dùng foreach để duyệt từng dòng dữ liệu -->
    <?php foreach($sanPhams as $sanPham):?>
        <tr>
            <td><?= $sanPham['ten_san_pham'] ?></td>
            <td><?= number_format($sanPham['gia'], 0, ',', '.') ?></td>
            <td><img width="50px" src="<?= $sanPham['hinh_anh'] ?>" alt=""></td>
            <td><?= $sanPham['so_luong'] ?></td>
            <td><a href="product.php?ma_san_pham=<?= $sanPham['ma_san_pham'] ?>&ten=<?= $sanPham['ten_san_pham'] ?>">Sửa</a></td>
        </tr>
        <?php endforeach;?>
        
    </tbody>
</table>




</body>
</html>