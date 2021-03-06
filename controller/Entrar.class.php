<?php

if (!defined('ROOT')) { define('ROOT', 'http://localhost/aprendendo_poo'); }
if(!isset($_SESSION)) { session_start() ; }

class Login {
    private $id;
    private $name;
    private $email;
    private $password;
    private $Manager;
    private $admin;

    public function __construct (array $data) {
        $this->Manager = new Manager();
        if (!empty($data['email'])) {
            $this->email = $data['email'];
        }
        if (!empty($data['senha'])) {
            $this->password = $data['senha'];
        }
        $this->entrar($data);
    }

    private function createSession() {
        $_SESSION['user'] = [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'senha' => $this->password,
            'elevation' => $this->admin
        ];
    }

    private function entrar ($data) {
        $data_database = $this->Manager->loginTeacher($data);
        if ($data_database !== false) {
            if (password_verify($this->password, $data_database['senha'])) {
                $this->id = $data_database['id_professor'];
                $this->name = $data_database['nome_professor'];
                $this->admin = true;
                $this->createSession();
                $path = ROOT . '/painel';
                header("Location: $path");
                die();
            } else {
                $path = ROOT . '/';
                header("Location: $path");
                die();
            }
        } else {
            $data_database = $this->Manager->loginStudent($data);
            if (password_verify($this->password, $data_database['senha'])) {
                $this->id = $data_database['id_aluno'];
                $this->name = $data_database['nome_aluno'];
                $this->admin = false;
                $this->createSession();
                $path = ROOT . '/painel';
                header("Location: $path");
                die();
            } else {
                $path = ROOT . '/';
                header("Location: $path");
                die();
            }
        }
    }

    public static function getName () {
        return $_SESSION['user']['name'];
    }

    public static function getId() {
        return $_SESSION['user']['id'];
    }

    public function checkLogged () {
        if (empty($_SESSION['user'])) {
            return false;
        } else {
            return true;
        }
    }

    public static function getElevation () {
        return $_SESSION['user']['elevation'];
    }
}