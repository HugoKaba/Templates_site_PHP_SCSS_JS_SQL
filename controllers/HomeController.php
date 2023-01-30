<?php

namespace controllers;

use model\Controller\AbstractController;

class HomeController extends AbstractController
{
    public $path;

    public function __construct($router)
    {
        $this->path = "Controllers/HomeController/";
        parent::__construct($router);
        /* ($path, $callback, $name)*/
        $router->add("/", [$this, 'index'], "home.index"); //add a route
        $router->add("/home", [$this, 'index'], "home.index");
    }

    public function index()
    {
        $page_title = "Home"; //name of the page
        $page_titre = "Exemple"; //title of the page (h1)

        return $this->render('home.index', compact('page_title', 'page_titre'));
    }
}
