<?php

namespace model\Router;

class Router
{
    protected $routes = [];
    protected $root = "";

    public function __construct()
    {
        $this->root = dirname($_SERVER['PHP_SELF']);
    }

    public function add($path, $callback, $name)
    {
        $this->routes[] = new Route($path, $callback, $name);
    }

    public function match($uris): ?Route
    {
        $uri = $uris;
        // récupère le dossier racine
        $root = $this->root == "\\" || "/" ? "" : $this->root;
        $uri = str_replace($root, '', $uri);
        $uri = $uri == '/' ? '/accueil' : $uri;

        foreach ($this->routes as $route) {
            if ($route->match($uri)) return $route;
        }
        return NULL;
    }

    public function generateUri(string $name, array $params = [])
    {
        foreach ($this->routes as $route) {
            if ($route->getName() == $name) {
                return $this->root . $route->generateUri($params);
            }
        }
    }
}
