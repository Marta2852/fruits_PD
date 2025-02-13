<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = require("routes.php");

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    if ($uri == '/show' && isset($_GET['id'])) {
        require 'controllers/posts/show.php';
    } else {
        http_response_code(404);
        require "controllers/404.php";
        die();
    }
}
