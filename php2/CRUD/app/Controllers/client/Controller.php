<?php 
    namespace App\Controllers\Client;

    class Controller {
        public function viewRender($view, $viewPath = []) {
            extract($viewPath, EXTR_SKIP);
            //ob_start();
            $viewPath = __DIR__ . "/../../views/$view.php";

            if (file_exists($viewPath)) {
                require $viewPath;
            } else {
                die("View not found: $viewPath");
            }
            //return ob_get_clean();
        }
    }
?>