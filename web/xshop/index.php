<?php 
    session_start();


    require_once './src/commons/functions.php';
    require_once './src/commons/evr.php';
    require_once './src/commons/baseModel.php';

    
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    require_once './config/head.php';
?>
<body>
    <div class="grid wide">
        <?php 
            require_once './config/header.php';
        ?>
        <div class="row">
        <?php 
            require_once './router/index.php';     
            require_once './config/sideBar.php';       
        ?>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <span>Thuyhm6 Copyright 2024</span>
    </div>
    <script src="./assets/js/script.js"></script>
</body>
</html>