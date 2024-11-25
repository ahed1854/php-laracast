<?php

// we use parse_url to strip the url provide from anything after ?
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


$routes = [
    "/websites/demo/" => "controllers/index.php",
    "/websites/demo/about" => "controllers/about.php",
    "/websites/demo/contact" => "controllers/contact.php"
];

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die;
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
