<?php

    if (!isset($_SESSION)) { session_start(); }
    $Manager = new Manager();
    $elevation = Login::getElevation();

    if ($elevation === true) {
        require_once 'view/novo_curso.php';
    }