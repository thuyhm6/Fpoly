<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>PHP 2</title>
</head>
<body>
    <?php 
        require_once 'model.php';
        require_once 'controller.php';
        require_once 'ajax.php';
        use controller\controller;
        // $controller = new Controller();
        $page = $_GET['page'] ?? '';
        if ($page != '') {
            (new Controller())->getPage($page);
        } else {
            (new Controller())->getProductController();
        }
        
    ?>
    <script src="main.js"></script>
</body>
</html>