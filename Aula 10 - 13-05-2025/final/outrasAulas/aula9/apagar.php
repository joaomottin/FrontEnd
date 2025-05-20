<?php


    $id = $_GET['id'] ?? null;

    if(!is_null($id)){
        require "banco.php";
        $banco->query("DELETE FROM tarefas WHERE id=$id");
    }

    
    header("Location: dashboard.php");


?>