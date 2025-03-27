
<?php $__env->startSection('title',"Danh sách danh mục sản phẩm"); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
<style>
    header {
    color: red;
    font-size: 50px;
}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<h1>Đây là trang danh mục sản phẩm</h1>
<button><a href="<?php echo e(route('category.add')); ?>">Thêm mới danh mục sản phẩm</a></button>
<?php if(Session::has('success')): ?>
    <p class="alert alert-success"><?php echo e(Session::get('success')); ?></p> 
<?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th>Tên danh mục sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            if($category->name != 'Iphone 20'):
        ?>
        
            <tr>
                <td><?php echo e($category->name); ?></td>
                <td><?php echo e($category->description); ?></td>
                <td>
                    
                </td>
            </tr>
        
        <?php
            endif;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('client', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php3\lablaravel\resources\views/category/index.blade.php ENDPATH**/ ?>