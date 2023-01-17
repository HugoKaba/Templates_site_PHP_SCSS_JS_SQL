<?php

namespace controllers;

use model\Controller\AbstractController;

class HomeController extends AbstractController
{
    public $path;

    public function __construct()
    {
        $this->path = "Controllers/HomeController/";
    }

    public function index()
    {
        $page_title = "Home"; //name of the page
        $page_titre = "Exemple"; //title of the page (h1)

        return $this->render('home.index', compact('page_title', 'page_titre'));
    }
}
