<?php

    if($_SERVER['REQUEST_METHOD'] === "GET"){
        require "banco.php";
        session_start();

        $tarefa = $$_GET['id'] ?? null;
        
        if(!is_null($idTarefa)){

            $q = "DELETE FROM tarefas WHERE id = $idTarefa"; 
            $resp = $banco->query($q);
        }
         header("Location: dashboard.php");

    } else{
        echo "erro";
    }


?>