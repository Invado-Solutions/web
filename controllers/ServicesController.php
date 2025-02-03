<?php
class ServicesController {
    public function index() {
        $title = "Servicios y Productos";
        $content = "views/services.php";
        require "views/layout.php";
    }
}
?>