<?php
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        include 'views/home.php';
        break;
    default:
        include 'views/item.php';
        break;
}
?>
