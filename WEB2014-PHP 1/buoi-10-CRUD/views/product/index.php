
    <h1>Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach($data as $product): ?>
            <tr>
                <td><?= $product['ten_san_pham'] ?></td>
                <td><?= $product['gia'] ?></td>
                <td><?= $product['so_luong'] ?></td>
                <td><a href="<?= BASE_URL ?>?action=editProduct&ID=<?= $product['ma_san_pham'] ?>"><button>Sửa</button></a> <a href="<?= BASE_URL ?>?action=deleteProduct&ID=<?= $product['ma_san_pham'] ?>"><button>Xóa</button></a></td>
            </tr>
        <?php endforeach?>
    </table>
