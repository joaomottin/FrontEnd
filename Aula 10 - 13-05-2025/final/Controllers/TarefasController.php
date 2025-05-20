<?php


class TarefasController {

    public static function index(){
        session_start();
        $codUsuario = $_SESSION['id-usuario'] ?? null;
        $nomeUsuario = $_SESSION['usuario'] ?? null;

        if(is_null($codUsuario)){
            header("Location: login.php");
        }

        // echo "<h2>Bem vindo $nomeUsuario</h2>";


        require "./arquivos/banco.php";
        $q = "SELECT * FROM tarefas WHERE id_usuario=$codUsuario";
        $resp = $banco->query($q);

        //var_dump($resp);

        require "./Views/dashboard.php";
    }

}

?>