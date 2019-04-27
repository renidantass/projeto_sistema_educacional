<?php
    if (!isset($_SESSION)) { session_start(); }
    include 'model/Manager.class.php';
    include 'controller/Notifications.class.php';
    // include 'controller/Entrar.class.php';
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
        include 'dependencias.php';
    ?>
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
    <div class="container-fluid">
        <?= Notifications::create() ?>
        <div class="row mt-2 container-fluid">
            <div class="col-md-12">
                <h4 class="lead"><strong>Seja bem-vindo(a), <?=Login::getName()?>.</strong> <a href="controller/logout.php"><span class="btn btn-pill btn-outline-secondary mx-1 float-right">Sair</span></a></h4>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-text">Listagem de todos os cursos</h5>
                        <div class="row">
                        <?php foreach($Manager->getRecentCourses() as $curso): ?>
                        <div class="col-md-6 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$curso['nome_curso']?></h5>
                                    <p class="text-muted"><?=$curso['descricao']?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-text">Adicionar novo curso</h5>
                        <form action="controller/curso.php" method="post">
                            <input class="form-control" type="text" name="nome_curso" placeholder="Nome do curso" required>
                            <textarea class="form-control mt-1" name="descricao" cols="30" rows="10" placeholder="Descrição do curso" required></textarea>
                            <div id="dragDropArea" class="mt-2"></div>
                            <input class="btn btn-primary float-right mt-1" type="submit" value="Adicionar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
</body>
</html>