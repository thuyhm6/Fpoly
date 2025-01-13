<?php

use controller\controller;

    require_once 'controller.php';
    $action = $_GET['action'] ?? '';
    $controller = new controller();
    switch($action) {
        case 'deleteProduct':
            $result = $controller->deleteProduct($_POST['id']);
            echo '1';
            break;
            
        default:

    }
?>