<?php
require_once "controllers/Router.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$router = new Router();
$router->handleRequest($page);
?>
