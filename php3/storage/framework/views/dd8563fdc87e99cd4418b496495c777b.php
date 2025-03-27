
<?php $__env->startSection('title',"Danh sách sản phẩm"); ?>
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
<h1>Đây là trang sản phẩm</h1>
<h2>Loại sản phẩm là : <?php echo e($category); ?></h2>
<h2>Tổng số sản phẩm là : <?php echo e($countProduct); ?></h2>
<button><a href="<?php echo e(route('product.add')); ?>">Thêm mới sản phẩm</a></button>
<?php if(Session::has('success')): ?>
    <p class="alert alert-success"><?php echo e(Session::get('success')); ?></p> 
<?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Loại sản phẩm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            if($product->name != 'Iphone 20'):
        ?>
        
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->category->name); ?></td>
                <td>
                    <a href="<?php echo e(route('product.edit', ['id'=>$product->id])); ?>" class="btn btn-warning">Sửa</a>
                    <form action="<?php echo e(route('product.delete', ['id'=>$product->id])); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        
        <?php
            endif;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('client', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\php3\lablaravel\resources\views/products.blade.php ENDPATH**/ ?>