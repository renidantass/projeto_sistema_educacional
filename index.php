<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;
require 'vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
    'displayErrorDetails' => true
]]);

$container = $app->getContainer();
$container['renderer'] = new PhpRenderer('./view');

$app->get('/', function (Request $req, Response $res, array $args) {
    $this->renderer->render($res, 'home.php');
});

$app->get('/inicio', function (Request $req, Response $res, array $args) {
    $this->renderer->render($res, 'home.php');
});

$app->get('/entrar', function (Request $req, Response $res, array $args) {
    $this->renderer->render($res, 'entrar.php');
});

$app->get('/cadastro', function (Request $req, Response $res, array $args) {
    $this->renderer->render($res, 'cadastro.php');
});

$app->get('/cadastro/professor', function (Request $req, Response $res, array $args) {
    $this->renderer->render($res, 'c_professor.php');
});

$app->get('/cadastro/aluno', function (Request $req, Response $res, array $args) {
    $this->renderer->render($res, 'c_aluno.php');
});

$app->get('/painel', function (Request $req, Response $res, array $args) {
    $this->renderer->render($res, 'painel.php');
});

$app->run();