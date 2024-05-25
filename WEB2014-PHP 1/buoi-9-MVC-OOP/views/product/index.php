
    <h1>Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
        </tr>
        <?php foreach($data as $product): ?>
            <tr>
                <td><?= $product['ten_san_pham'] ?></td>
                <td><?= $product['gia'] ?></td>
                <td><?= $product['so_luong'] ?></td>
            </tr>
        <?php endforeach?>
    </table>
