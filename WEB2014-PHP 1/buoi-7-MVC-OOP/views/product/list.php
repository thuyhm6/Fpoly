<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Mục đích</th>
        </tr>
        <?php foreach($data as $product):?>
            <tr>
                <td><?= $product['ma_san_pham'] ?></td>
                <td><?= $product['ten_san_pham'] ?></td>
                <td><?= $product['gia'] ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>