<?php
class HomeController {
    public function index() {
        $title = "Inicio";
        $content = "views/home.php";
        require "views/layout.php";
    }
}
?>
