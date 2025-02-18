<h1>Sửa sản phẩm</h1>

<form method="POST" action="<?= BASE_URL ?>/admin/product/update/<?= $product['id'] ?>">
    <label class="form-label">Mã sản phẩm:</label>
    <input class="form-control" type="text" name="pro_code" value="<?= htmlspecialchars($product['pro_code']) ?>" required>
    <label class="form-label">Tên sản phẩm:</label>
    <input class="form-control" type="text" name="pro_name" value="<?= htmlspecialchars($product['pro_name']) ?>" required>
    <label class="form-label">Giá:</label>
    <input class="form-control" type="number" name="price" value="<?= $product['price'] ?>" required>
    <button class="btn btn-primary" type="submit">Cập nhật</button>
</form>

<a href="./list">Quay lại</a>
