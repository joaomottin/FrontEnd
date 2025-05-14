<?php
    session_start();

    $logado = $_SESSION["Logado"] ?? null;
    $usuario = $_SESSION["Usuario"] ?? null;

    // echo $logado;
    if($logado) echo "<h3>Logado! Bem-vindo $usuario</h3>";
    else echo "<h3>Fazer login!</h3>";
?>