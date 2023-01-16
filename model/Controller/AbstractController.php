<?php

namespace model\Controller;

abstract class AbstractController
{
    protected function render($view, $params = [],)
    {
        $view = str_replace('.', DIRECTORY_SEPARATOR, $view) . ".php";
        extract($params);
        echo "<br>";
        // ob_start();
        require "views/$view";
        // return ob_get_clean();
    }
}
