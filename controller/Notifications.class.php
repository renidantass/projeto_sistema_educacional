<?php

class Notifications {
    private static function clear () {
        unset($_SESSION['mensagem']);
    }

    public function create () {
        if (isset($_SESSION['mensagem'], $_SESSION['tipo'])) {
            $mensagem = $_SESSION['mensagem'];
            $tipo = $_SESSION['tipo'];
            echo "<div class='row mt-2'>
                        <div class='col-md-12'>
                            <div class='alert $tipo'>$mensagem</div>
                        </div>
                    </div>";
            self::clear();
        }
    }

    public static function addSuccess ($mensagem) {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipo'] = 'alert-success';
    }

    public static function addDanger ($mensagem) {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipo'] = 'alert-danger';
    }

    public static function addWarning ($mensagem) {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipo'] = 'alert-warning';
    }

    public static function addInfo ($mensagem) {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipo'] = 'alert-info';
    }
}