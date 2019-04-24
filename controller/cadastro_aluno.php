<?php

include '../model/Manager.class.php';

unset($_POST['csenha']);
$_POST['senha'] = password_hash(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING), PASSWORD_ARGON2I);
$data = $_POST;

$Manager = new Manager();
$result = $Manager->addStudent($data);
if ($result) {
    $response = [
        "status" => "success",
        "message" => "Cadastro realizado com sucesso!"
    ];
} else {
    $response = [
        "status" => "error",
        "message" => "Cadastro não realizado, tente novamente mais tarde"
    ];
}
echo json_encode($response);