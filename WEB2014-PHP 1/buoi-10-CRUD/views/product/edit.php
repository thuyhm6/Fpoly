<h1>Sửa sản phẩm</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input class="form-control" type="text" value="<?= $data['ten_san_pham'] ?>">
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input class="form-control" type="number" value="<?= $data['gia'] ?>">
    </div>
    <button>Lưu</button>
</form>