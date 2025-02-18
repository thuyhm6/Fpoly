<h1>Quản lý sản phẩm</h1>

<form id="productForm" method="GET" action="./list">
    <input class="form-control" type="text" name="keyword" placeholder="Tìm kiếm sản phẩm..." value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>">
    <input class="form-control" type="text" placeholder="Giá sản phẩm">
    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
    <button class="btn btn-danger" type="button" onclick="resetForm(this)">Xóa hết</button>
    <a href="./create" class="btn btn-primary">Thêm sản phẩm</a>
</form>



<table border="1" class="table table-bordered table-hover">
    <tr class="table-primary">
        <th>ID</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>HÌnh ảnh</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= htmlspecialchars($product['pro_code']) ?></td>
            <td><?= htmlspecialchars($product['pro_name']) ?></td>
            <td><?= number_format($product['price']) ?> VNĐ</td>
            <td>
                <?php foreach($product['image'] as $img): ?>
                    <img src="<?= BASE_URL.'/admin/'.$img['file_path'] ?>" alt="" width="100">
                <?php endforeach; ?>
            </td>
            <td>
                <a href="./edit/<?= $product['id'] ?>">Sửa</a>
                <a href="./delete/<?= $product['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
