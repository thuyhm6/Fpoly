<h1>Đây là trang thêm mới sản phẩm</h1>
<form action="<?php echo e(route('products.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="price">Giá:</label>
    <input type="number" id="price" name="price" required>
    <br><br>

    <label for="description">Mô tả:</label>
    <textarea id="description" name="description"></textarea>
    <br><br>

    <button type="submit">Thêm sản phẩm</button>
</form><?php /**PATH C:\xampp\htdocs\php3\lablaravel\resources\views/product-add.blade.php ENDPATH**/ ?>