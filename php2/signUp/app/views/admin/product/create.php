<h1>Thêm sản phẩm</h1>
<?php 
    $error = $_SESSION['error'] ?? [];
    unset($_SESSION['error']);
    //var_dump($error);
?>
<form method="POST" action="./store" enctype="multipart/form-data">
    <label class="form-label">Mã sản phẩm:</label>
    <input class="form-control" type="text" name="pro_code" >
    <?php if (!empty($error['pro_code'])):?>
        <span class="error"><?= implode(",", $error['pro_code']) ?></span>
    <?php endif;?>
    <label class="form-label">Tên sản phẩm:</label>
    <input class="form-control" type="text" name="pro_name" >
    <?php if (!empty($error['pro_name'])):?>
        <span class="error"><?= implode(",", $error['pro_name']) ?></span>
    <?php endif;?>
    <label class="form-label">Giá:</label>
    <input class="form-control" type="number" name="price" >
    <label for="" class="form-label">Hình ảnh</label>
    <input type="file" class="form-control" name="images[]" multiple>
    <button class="btn btn-primary" type="submit">Thêm</button>
</form>

<a href="./list">Quay lại</a>
