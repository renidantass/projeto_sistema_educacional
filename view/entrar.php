<?php

include 'model/Manager.class.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Ensino JGV</title>
    <?php 
        include 'dependencias.php';
    ?>
    <style>
        body {
            background-image: url('view/images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="<?=joinPath(ROOT_PATH, ['index.php'])?>" class="navbar-brand">Sistema de Ensino JGV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Ocultar menu" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto">
                <?php
                    include 'menu.php';
                ?>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Content -->
    <div class="container-fluid h-75">
        <div class="row h-100">
            <div class="col-md-6 my-auto mx-auto">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Acesso</h5>
                        <form action="controller/entrar.php" method="post">
                            <div class="form-group text-left">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="email" name="email" id="email" required>
                            </div>
                            <div class="form-group text-left">
                                <label for="password">Senha</label></label>
                                <input class="form-control" type="password" name="senha" id="senha" required>
                            </div>
                            <input type="submit" value="Entrar" class="btn btn-outline-primary btn-pill">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
</body>
</html>