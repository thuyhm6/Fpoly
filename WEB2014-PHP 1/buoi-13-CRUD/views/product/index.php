
    <h1>Danh sách sản phẩm</h1>
    <a href="<?= BASE_URL ?>/product/create"><button>Thêm sản phẩm</button></a>
    <table>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach($data as $product): ?>
            <tr>
                <td><?= $product['ma_san_pham'] ?></td>
                <td><?= $product['ten_san_pham'] ?></td>
                <td><?= $product['gia'] ?></td>
                <td><?= $product['so_luong'] ?></td>
                <td><a href="<?= BASE_URL ?>/product/edit?ID=<?= $product['ma_san_pham'] ?>"><button>Sửa</button></a> <a href="<?= BASE_URL ?>/product/delete?ID=<?= $product['ma_san_pham'] ?>"><button>Xóa</button></a></td>
            </tr>
        <?php endforeach?>
    </table>
