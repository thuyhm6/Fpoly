<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once './commons/function.php';
        require_once './commons/environment.php';
        require_once './commons/baseModel.php';
        require_once 'header.php';
        autoLoadFile('./controllers/');
        autoLoadFile('./models/');

    ?>
<?php require_once 'header.php'?>
<body>
    <?php require_once 'navigation.php'?>
    <?php 
        require_once './router/index.php';
    ?>

</body>
</html>



