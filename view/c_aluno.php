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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro para aluno</h5>
                        <form id="formCadAluno" method="post" action="../controller/cadastro_aluno.php">
                            <div class="form-group">
                                <label for="nome">Nome do aluno</label>
                                <input type="text" id="nome" name="nome_aluno" class="form-control" placeholder="Seu nome" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do aluno</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Seu e-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" class="form-control" required>
                            </div>
                            <div class="form-group" id="csenha-div">
                                <label for="csenha">Confirmação da senha</label>
                                <input type="password" id="csenha" name="csenha" class="form-control" required>
                            </div>
                            <input class="btn btn-info float-right" type="submit" value="Cadastrar">
                        </form>  
                    </div>
                </div>     
            </div>
        </div>
    </div>
    <!-- Content -->
    <script src="<?=joinPath(JS_PATH, ['cadastro.js'])?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>
