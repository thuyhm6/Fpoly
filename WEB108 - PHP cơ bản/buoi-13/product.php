<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include "database.php";
        $sql = "SELECT * FROM SAN_PHAM";
        $result_pproduct = mysqli_query($conn, $sql);
        //Chuyển kết quả select sang dạng mảng
        if ($result_pproduct == false) {
            echo mysqli_error($$conn);
        } else {
            $products = mysqli_fetch_all($result_pproduct, MYSQLI_ASSOC);
            //print_r($products);
        }
    ?>
    <table>
        <thead>
            <tr>
                <td>Mã sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Giá</td>
                <td>Thao tacs</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product):?>
                <tr>
                    <td><?= $product['ma_san_pham'] ?></td>
                    <td><?= $product['ten_san_pham'] ?></td>
                    <td><?= $product['so_luong'] ?></td>
                    <td><?= $product['gia'] ?></td>
                    <td><a href="editProduct.php?id=<?= $product['ma_san_pham'] ?>">Sửa</a></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>