<?php
$pdo = require "bdd.php";
$authDB = require "model/sql.php";

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require "$class.php";
});

require "route.php";

