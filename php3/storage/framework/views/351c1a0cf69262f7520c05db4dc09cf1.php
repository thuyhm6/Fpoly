<h1>Đây là trang thêm mới sản phẩm</h1>
<form action="<?php echo e(route('products.update')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" value="<?php echo e($product->name); ?>" required>
    <br><br>

    <label for="price">Giá:</label>
    <input type="number" id="price" name="price" value="<?php echo e($product->price); ?>" required>
    <br><br>

    <label for="description">Mô tả:</label>
    <textarea id="description" name="description" value="<?php echo e($product->description); ?>"></textarea>
    <br><br>

    <button type="submit">Sửa sản phẩm</button>
</form><?php /**PATH C:\xampp\htdocs\php3\lablaravel\resources\views/product-edit.blade.php ENDPATH**/ ?>