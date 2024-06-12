<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once './commons/function.php';
        require_once './models/User.php';
        autoLoadFile("./controllers/");
        autoLoadFile("./models/");

    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thi</title>
</head>
<body>
    <h1>Bài thi</h1>
    
    <?php 
        require_once './router/index.php';
        
    ?>
</body>
</html>