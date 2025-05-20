<?php

// var a = new HomeController(); ->

class HomeController
{
    

    public static function index()
    {
        HomeController::login();
    }


    public static function login()
    {
        require __DIR__ . "/../Views/login.php";
    }


    public static function fazerLogin() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();

            $usuario_formulario = $_POST['usuario'] ?? null;
            $senha_formulario = $_POST['senha'] ?? null;

            if (is_null($usuario_formulario) || is_null($senha_formulario)) {
                echo "Fazer Login...";
                header("Location: ?p=login");
            } else {

                require "./arquivos/banco.php";

                if (fazerLogin($usuario_formulario, $senha_formulario)) {
                    echo "Sucesso!";
                    header("Location: ?p=dashboard");
                } else {
                    echo "Erro X.x";
                    header("Location: ?p=login");
                }
            }
        }else{
            header("Location: ?p=login");
        }
    }
}
