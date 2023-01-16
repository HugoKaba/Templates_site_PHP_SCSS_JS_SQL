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
        $page_title = "Accueil";
        $page_titre = "Projet PHP";
        $page_description = "Ce projet permet de découvrir la programmation PHP.";

        return $this->render('home.index', compact('page_title', 'page_titre', 'page_description'));
    }
}
