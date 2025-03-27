<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header>Đây là khối header</header>
    <?php echo $__env->yieldContent('content'); ?>
    <footer>Đây là khối footer</footer>

</body>
<?php echo $__env->yieldPushContent('scripts'); ?>
</html><?php /**PATH C:\xampp\htdocs\php3\lablaravel\resources\views/client.blade.php ENDPATH**/ ?>