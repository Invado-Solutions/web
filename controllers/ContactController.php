<?php
class ContactController {
    public function index() {
        $title = "Contacto";
        $content = "views/contact.php";
        require "views/layout.php";
    }
}
?>