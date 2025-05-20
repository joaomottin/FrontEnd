<?php


    if($_SERVER["REQUEST_METHOD"] === "POST"){

        require "banco.php";
        
        $idTarefa = $_POST["id-tarefa"] ?? null;
        $idUsuario = $_POST["id-usuario"] ?? null;
        $textoTarefa = $_POST["texto"] ?? null;
        // var_dump($_POST);
        
        if(!empty($idTarefa) && !empty($idUsuario) && !empty($textoTarefa)){

            $sql = "UPDATE tarefas SET id_usuario='$idUsuario',
                     texto='$textoTarefa' WHERE id = '$idTarefa'";
            // UPDATE `tarefas` SET `id_usuario` = '1' WHERE `tarefas`.`id` = 15; 
            $resp = $banco->query($sql);
            var_dump($resp);
        }

    }
    
    header("Location: dashboard2.php");


?>