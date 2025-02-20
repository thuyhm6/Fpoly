<?php
namespace App\Controllers\Admin;

class DashboardController {
    public function index() {
        require_once __DIR__ . "/../../views/admin/dashboard.php";
    }
}
?>
