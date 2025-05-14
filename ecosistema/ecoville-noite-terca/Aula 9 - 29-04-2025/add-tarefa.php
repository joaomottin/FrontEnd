<?php

    

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        require "banco.php";
        session_start();

        $tarefa = $_POST['nova-tarefa'] ?? null;
        $codUsuario = $_SESSION['id_usuario'] ?? null;
        
        if(!is_null($tarefa) && !is_null($codUsuario)){

            $q = "INSERT INTO tarefas (id, id_usuario, texto) 
                    VALUES (NULL, $codUsuario, '$tarefa')";
            
            $resp = $banco->query($q);
            //var_dump($resp);
        }

         header("Location: dashboard.php");

    } else{
        echo "erro";
    }


?>