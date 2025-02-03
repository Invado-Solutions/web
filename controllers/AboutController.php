<?php
class AboutController {
    public function index() {
        $title = "Sobre Nosotros";
        $content = "views/about.php";
        require "views/layout.php";
    }
}
?>
