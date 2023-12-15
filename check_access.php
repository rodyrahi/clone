<?php
$server_ip = $_SERVER['SERVER_ADDR'];
$allowed_server_ip = '2a02:4780:11:1359:0:39e2:6b67:2';

if ($server_ip !== $allowed_server_ip) {
    // Access denied
    die("Access denied. Unauthorized server.");
}
?>
