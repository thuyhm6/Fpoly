<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once './commons/function.php';
        require_once './commons/environment.php';
        require_once './commons/baseModel.php';
        require_once 'header.php';
        autoLoadFile('./controllers/');
        autoLoadFile('./models/');

        use controller\HomeController;
        use controller\ProductController;

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
            'deleteProduct' => (new ProductController)->delete(),
            'editProduct' => (new ProductController)->find(),
            default => require_once '404.html'
        }
    ?>

</body>
</html>



