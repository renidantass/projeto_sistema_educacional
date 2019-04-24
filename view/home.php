<?php

include 'model/Manager.class.php';

$Manager = new Manager();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Ensino JGV</title>
    <?php 
        include 'view/dependencias.php';
    ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="<?=joinPath(ROOT_PATH, ['inicio'])?>" class="navbar-brand">Sistema de Ensino JGV</a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <h2 class="display-4 text-center">Cursos recentes</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($Manager->getRecentCourses() as $curso): ?>
            <div class="col-md-3 col-sm-6 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?=$curso['nome_curso']?></h5>
                        <p class="card-text"><?=$curso['descricao']?></p>
                        <a href="#" class="btn btn-primary">Matricule-se</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Content -->
</body>
</html>