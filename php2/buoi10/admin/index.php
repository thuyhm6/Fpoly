<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php2 mvc</title>
</head>
<body>
    <?php 
        require_once __DIR__.'/../config.php';
        require_once __DIR__.'/../app/autoload.php';

        use App\Router;
        $url = str_replace(BASE_URL, "", $_SERVER['REQUEST_URI']);

        $router = new Router();
        require_once __DIR__.'/../routes/admin.php';
        
        $router->route($url, $_SERVER['REQUEST_METHOD']);

    ?>
</body>
</html>