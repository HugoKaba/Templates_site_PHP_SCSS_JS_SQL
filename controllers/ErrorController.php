<?php

namespace controllers;

use model\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function index()
    {
        $page_title = "Erreur 404";
        $page_titre = "Erreur 404";
        $page_description = "Page d'erreur 404.";

        return $this->render('404', compact('page_title', 'page_titre', 'page_description'));
    }
}
