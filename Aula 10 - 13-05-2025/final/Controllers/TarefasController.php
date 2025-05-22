<?php

    require __DIR__."/../Config/banco.php";


class TarefasController {

    public static function index(){
        global $banco;
        session_start();
        $codUsuario = $_SESSION['id-usuario'] ?? null;
        $nomeUsuario = $_SESSION['usuario'] ?? null;

        if(is_null($codUsuario)){
            header("Location: login.php");
        }

        // echo "<h2>Bem vindo $nomeUsuario</h2>";

        require_once "./Config/banco.php";
        $q = "SELECT * FROM tarefas WHERE id_usuario=$codUsuario";
        $resp = $banco->query($q);

        //var_dump($resp);

        require "./Views/dashboard.php";
    }

    public static function addTarefa() {
        global $banco;
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            session_start();
            $tarefa = $_POST['nova-tarefa'] ?? null;
            $codUsuario = $_SESSION['id-usuario'] ?? null;

            if (!is_null($tarefa) && !is_null($codUsuario)) {
                $q = "INSERT INTO tarefas (id, id_usuario, texto) 
                      VALUES (NULL, $codUsuario, '$tarefa')";
                $banco->query($q);
            }

            header("Location: dashboard");
            exit;
        } else {
            echo "Erro ao adicionar tarefa.";
        }
    }

    public static function apagarTarefa(){
        
    }

    public static function atualizarTarefa($idTarefa){
        
    }

    public static function editarTarefa(){
    $idTarefa = $_GET['id'] ?? null;
    global $banco;

    if(is_null($idTarefa)){
        header("Location: dashboard.php");
    }

    require "banco.php";
    $sql = "SELECT * FROM tarefas WHERE id='$idTarefa'";
    $resp = $banco->query($sql);
    // var_dump($resp);
    $tarefa = $resp->fetch_object();
    //var_dump($tarefa);
    }




}

?>