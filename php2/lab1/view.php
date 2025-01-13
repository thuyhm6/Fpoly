<table>
    <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $product):?>
            <tr class="product_<?= $product['id'] ?>">
                <td><?= $product['ma_san_pham'] ?></td>
                <td><?= htmlspecialchars($product['ten_san_pham']) ?></td>
                <td><?= $product['so_luong'] ?></td>
                <td><a href="#" onclick="deleteProduct(<?= $product['id'] ?>)">Xóa</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>