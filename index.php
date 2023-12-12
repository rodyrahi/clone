<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'home.php',
    '/product' => 'item.php',
    '/admin' => 'admin.php',


];

if (array_key_exists($uri, $routes)) {

    
    include 'views/' . $routes[$uri];
} else {


    include 'views/notfound.php';
}


