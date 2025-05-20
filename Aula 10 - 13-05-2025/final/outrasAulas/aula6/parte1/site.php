<?php

    session_start();

    $logado = $_SESSION["logado"] ?? null; 
    $usuario = $_SESSION["usuario"] ?? null;

    // echo $logado;
    if($logado){
        echo "<h4>logado: bem vindo $usuario</h4>";
    }else{
        echo "<h4>erro - fazer login</h4>";
    }


?>