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
    <div class="container-fluid h-75">
        <div class="row h-100 my-3">
            <div class="col-md-6 my-auto">
                <div class="card">
                    <img src="<?=joinPath(IMAGES_PATH, ['professores.jpg'])?>" alt="Cadastro para professores" class="card-img-top" style="height: 400px;">
                    <div class="card-body text-center">
                        <h4 class="card-title"><strong>Professores</strong></h4>
                        <a href='cadastro/professor'><button class="btn btn-secondary">Cadastre-se</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-auto">
                <div class="card">
                    <img src="<?=joinPath(IMAGES_PATH, ['aluno.jpg'])?>" alt="Cadastro para alunos" class="card-img-top" style="height: 400px;">
                    <div class="card-body text-center">
                        <h4 class="card-title"><strong>Aluno</strong></h4>
                        <a href='cadastro/aluno'><button class="btn btn-primary">Cadastre-se</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
</body>
</html>
