<?php
session_start();
define('ROOT', 'http://localhost/aprendendo_poo');

if (!empty($_SESSION['user'])) {
    session_destroy();
    $path = ROOT . '/inicio';
    header("Location: $path");
    die();
}