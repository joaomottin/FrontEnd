<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        require "banco.php";
        session_start();

        $tarefa = $_POST['nova-tarefa'] ?? null;
        $codUsuario = $_SESSION['id-usuario'] ?? null;
        
        if(!is_null($tarefa) && !is_null($codUsuario)){

            $q = "INSERT INTO tarefas (id, id_usuario, texto) VALUES (NULL, $codUsuario, '$tarefa')";
            $banco->query($q);
        }
    } else{
        header("Location: dashboard");
    }
?>