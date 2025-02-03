<?php
class Router {
    public function handleRequest($page) {
        switch ($page) {
            case 'about':
                require_once "controllers/AboutController.php";
                $controller = new AboutController();
                break;
            case 'services':
                require_once "controllers/ServicesController.php";
                $controller = new ServicesController();
                break;
            case 'industries':
                require_once "controllers/IndustriesController.php";
                $controller = new IndustriesController();
                break;
            case 'contact':
                require_once "controllers/ContactController.php";
                $controller = new ContactController();
                break;
            case 'reconectadores':  // Nueva ruta para reconectadores
                require_once "controllers/ReconectadoresController.php";
                $controller = new ReconectadoresController();
                break;
            default:
                require_once "controllers/HomeController.php";
                $controller = new HomeController();
                break;
                
        }
        $controller->index();
    }
}
?>
