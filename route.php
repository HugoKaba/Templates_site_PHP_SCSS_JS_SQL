<?php

use model\Router\Route;
use controllers\HomeController;
use controllers\ErrorController;

function getRoute(string $uri, $routes): ?Route
{
    foreach ($routes as $route) {
        if ($route->match($uri)) return $route;
    }
    return NULL;
}
function generateUri(string $name,array $params = [])
{
    global $root;
    global $routes;
    foreach ($routes as $route) {
        if ($route->getName() == $name) {
            return $root . $route->generateUri($params);
        }
    }
}

// récupère le dossier racine
$root = dirname($_SERVER['PHP_SELF']);
$uri = $_SERVER['REQUEST_URI'] ?? ['REQUEST_URL'];
$uri = str_replace($root, '', $uri);
$uri = $uri == '/' ? '/accueil' : $uri;

// controller
$controllerHome = new HomeController();
$controllerError = new ErrorController();

// routes
$routes = [
    new Route("/", [$controllerHome, 'index'], "home.index"),
    new Route("/accueil", [$controllerHome, 'index'], "home.index"),
];

$route = getRoute($uri, $routes);

if (isset($route)) {
    $params = $route->getParams($uri);
    $responce = $route->getCallBack();
    $responce[0]->index();
} else {
    $controllerError->index();
}
