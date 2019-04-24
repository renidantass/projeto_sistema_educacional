<?php
session_start();
include '../model/Manager.class.php';
include 'Notifications.class.php';
include 'Entrar.class.php';

$data = $_POST;
$data['id_professor'] = Login::getId();

$manager = new Manager();
$result = $manager->addCourse($data);
if ($result) {
    Notifications::addSuccess('Curso adicionado com sucesso');
} else {
    Notifications::addDanger('Curso adicionado com sucesso');
}
session_write_close();

header("Location: ../painel");
die();