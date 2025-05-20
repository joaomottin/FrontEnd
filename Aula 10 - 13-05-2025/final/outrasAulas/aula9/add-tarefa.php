<?php

    

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        require "banco.php";
        session_start();

        $tarefa = $_POST['nova-tarefa'] ?? null;
        $codUsuario = $_SESSION['id-usuario'] ?? null;
        
        if(!is_null($tarefa) && !is_null($codUsuario)){

            $q = "INSERT INTO tarefas (id, cod_usuario, titulo) 
                    VALUES (NULL, $codUsuario, '$tarefa')";
            
            $banco->query($q);
        }

        header("Location: dashboard.php");

    } else{
        echo "erro";
    }


?>