<?php

namespace model\Controller;

abstract class AbstractController
{
    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    protected function render($view, $params = [],)
    {
        $view = str_replace('.', DIRECTORY_SEPARATOR, $view) . ".php";
        extract($params);
        require "views/$view";
    }
}
