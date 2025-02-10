<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai lab</title>
</head>
<body>
    <?php 
        require_once __DIR__.'/config.php';
        require_once __DIR__.'/app/autoload.php';
        use App\Router;

        $url = isset($_GET['url']) ? '/' .trim($_GET['url']) : '/';
        Router::route($url);
    ?>
</body>
</html>