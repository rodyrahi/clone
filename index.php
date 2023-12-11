<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'home.php',
    '/product' => 'item.php',
    '/admin' => 'admin.php',
];

if (array_key_exists($uri, $routes)) {
    // Use var_dump for debugging or remove this line if not needed
    var_dump('views/' . $routes[$uri]);
    
    include 'views/' . $routes[$uri];
} else {
    var_dump('views/' . $routes[$uri]);

    include 'views/notfound.php';
}


