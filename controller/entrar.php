<?php
include '../model/Manager.class.php';
include 'Entrar.class.php';

$data = $_POST;

$Manager = new Manager();

try {
    $Entrar = new Login($data);
} catch (Exception $e) {
    echo "Erro, parece ser um acesso do tipo aluno, certo?";
}