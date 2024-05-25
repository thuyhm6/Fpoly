<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once './commons/function.php';
        require_once './commons/environment.php';
        require_once './commons/baseModel.php';
        require_once 'header.php';
        autoLoadFile('./controllers/');
        autoLoadFile('./models/');
        $home = new HomeController();
    ?>
<?php require_once 'header.php'?>
<body>
    <?php require_once 'navigation.php'?>
    <?php 
        $action = $_GET['action'] ?? '/';
        match($action) {
            '/' => $home->index(),
            'product' => (new ProductController)->index(),
            default => require_once '404.html'
        }
    ?>

</body>
</html>



