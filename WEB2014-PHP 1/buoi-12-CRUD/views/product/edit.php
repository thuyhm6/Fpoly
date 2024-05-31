<h1>Sửa sản phẩm</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input class="form-control" type="text" name="ten_san_pham" value="<?= $data['ten_san_pham'] ?>">
        <input class="form-control" type="hidden" name="ma_san_pham" value="<?= $data['ma_san_pham'] ?>">
    </div>
    <div class="form-group">
        <label for="">Số lượng</label>
        <input class="form-control" type="number" name="so_luong" value="<?= $data['so_luong'] ?>">
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input class="form-control" type="number" name="gia" value="<?= $data['gia'] ?>">
    </div>
    <button>Lưu</button>
</form>