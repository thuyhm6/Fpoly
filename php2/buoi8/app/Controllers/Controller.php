<?php 
    namespace App\Controllers;

    class Controller {
        public function viewRender($template, $param = []) {
            extract($data, EXTR_SKIP);
            ob_start();
            require_once __DIR__."./../views/$template";

            return ob_get_clean();
        }
    }
?>