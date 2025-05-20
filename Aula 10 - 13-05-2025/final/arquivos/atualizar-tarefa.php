<?php


    if($_SERVER['REQUEST_METHOD'] === "POST"){

        $idTarefa = $_POST['id'] ?? null;
        $idUsuario = $_POST['id-usuario'] ?? null;
        $texto = $_POST['texto'] ?? null;
        
        if(!is_null($idTarefa) && !is_null($idUsuario) && !is_null($texto)){
            require "banco.php";
            
            $sql = "UPDATE tarefas SET id_usuario='$idUsuario', 
                    texto='$texto' WHERE id='$idTarefa' ";

            $banco->query($sql);

            // UPDATE `tarefas` SET `id_usuario` = '2' WHERE `tarefas`.`id` = 3; 
        }

        
    }

    
    header("Location: dashboard.php");

?>