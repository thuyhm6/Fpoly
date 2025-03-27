
<?php $__env->startSection('content'); ?>
<h1>Đây là trang thêm mới sản phẩm</h1>
<form action="<?php echo e(route('categories.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" >
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="alert alert-danger text-center"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br><br>

    <label for="description">Mô tả:</label>
    <textarea id="description" name="description"><?php echo e(old('description')); ?></textarea>
    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="alert alert-danger text-center"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br><br>

    <button type="submit">Thêm sản phẩm</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php3\lablaravel\resources\views/category/add.blade.php ENDPATH**/ ?>