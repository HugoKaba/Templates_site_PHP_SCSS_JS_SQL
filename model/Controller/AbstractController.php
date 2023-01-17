<?php

namespace model\Controller;

abstract class AbstractController
{
    protected function render($view, $params = [],)
    {
        $view = str_replace('.', DIRECTORY_SEPARATOR, $view) . ".php";
        extract($params);
        require "views/$view";
    }
}
