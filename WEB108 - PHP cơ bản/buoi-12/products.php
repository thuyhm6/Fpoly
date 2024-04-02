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
        $sql_product = "SELECT * FROM SAN_PHAM ORDER BY MA_SAN_PHAM ASC";
        $result_product = mysqli_query($conn, $sql_product);
        if ($result_product == false) {
            echo mysqli_error($conn);
        } else {
            $products = mysqli_fetch_all($result_product, MYSQLI_ASSOC);
        }
    ?>
    <?php foreach ($products as $product):?>
        <p>Sản phẩm: <?= $product['ma_san_pham'] ?>, <?= $product['ten_san_pham'] ?></p>
       
    <?php endforeach?>
    <button><a href="addProduct.php">Thêm sản phẩm</a></button>
</body>
</html>