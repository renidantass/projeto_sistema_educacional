<?php

include 'controller/Entrar.class.php';

$auth_entrar = function ($request, $response, $next) {
    if (Login::checkLogged() === true) {
        $response = $response->withRedirect(ROOT . '/painel');
    } else {
        $next($request, $response);
    }
    return $response;
};

$auth_painel = function ($request, $response, $next) {
    if (Login::checkLogged() === true) {
        $next($request, $response);
    } else {
        $response = $response->withRedirect(ROOT . '/entrar');
    }
    return $response;
};