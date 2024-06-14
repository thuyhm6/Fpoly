<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once './commons/function.php';
        require_once './commons/env.php';

        autoLoadFile('./controllers/');
        autoLoadFile('./models/');
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thi PHP1</title>
</head>
<body>
    <?php 
        require './router/index.php';
    ?>
</body>
</html>