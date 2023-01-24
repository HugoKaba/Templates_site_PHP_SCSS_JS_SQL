<?php

use model\Router\Router;
use controllers\HomeController;
use controllers\ErrorController;

$uri = $_SERVER['REQUEST_URI'];

// controller
$router = new Router();

$controllerHome = new HomeController($router);
$controllerError = new ErrorController($router);

$route = $router->match($uri);

if (isset($route)) {
    $params = $route->getParams($uri);
    $responce = $route->getCallBack()($uri);
} else {
    $controllerError->index();
}
