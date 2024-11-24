<?php

// we use parse_url to strip the url provide from anything after ?
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// old way of routing the requested page
// if ($uri === "/websites/demo/") {
//     require "controllers/index.php";
// } else if ($uri === "/websites/demo/about") {
//     require "controllers/about.php";
// } else if ($uri === "/websites/demo/contact") {
//     require "controllers/contact.php";
// }

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

// array_key_exists checks if the array($routes) has a key of the given name($uri) that exists
// if (array_key_exists($uri, $routes)) {
//     require $routes[$uri];
// } else {
//     abort();
// }

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
