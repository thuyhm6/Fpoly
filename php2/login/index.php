<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inc/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Bai lab</title>
</head>
<body>
    <?php 
    session_start();
        require_once __DIR__ . '/app/autoload.php';
        require_once __DIR__ . '/config.php';
        
        use App\Router;
        
        $router = new Router();
        
        require_once __DIR__ . '/routes/client.php';
        $url = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
        //var_dump($url);
        $router->dispatch($url, $_SERVER['REQUEST_METHOD']);
    ?>

    <script>
        function resetForm(formID) {
            //lấy form chứa nút button
            const formID = button.form;
            //Reset form
            formID.reset();
        }
    </script>
</body>
</html>