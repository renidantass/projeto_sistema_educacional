<?php

function setClass ($script) {
    $current = basename($_SERVER['REQUEST_URI']);
    if ($script === $current) {
        echo "active";
    }
}

?>

<li class="nav-item <?=setClass('inicio')?>">
    <a class="nav-link" href="<?=joinPath(ROOT_PATH, ['inicio'])?>">Cursos</a>
</li>
<li class="nav-item <?=setClass('cadastro')?>">
    <a class='nav-link' href="<?=joinPath(ROOT_PATH, ['cadastro'])?>">Cadastro</a>
</li>
<li class="nav-item <?=setClass('entrar')?>">
    <a class='nav-link' href="<?=joinPath(ROOT_PATH, ['entrar'])?>">Painel</a>
</li>