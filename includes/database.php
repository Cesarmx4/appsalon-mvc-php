<?php

//$db = mysqli_connect('localhost', 'root', '1404', 'app_salon');
$db = mysqli_connect(
    $_ENV['DB_HOST'], // Busca la variable DB_HOST
    $_ENV['DB_USER'], // Busca la variable DB_USER
    $_ENV['DB_PASS'], // Busca la variable DB_PASS
    $_ENV['DB_NAME']  // Busca la variable DB_NAME
);

$db->set_charset("utf8");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}