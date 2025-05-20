<?php

    session_start();
    $codUsuario = $_SESSION['id-usuario'] ?? null;
    $nomeUsuario = $_SESSION['usuario'] ?? null;

    if(is_null($codUsuario)){
        header("Location: login.php");
    }

    // echo "<h2>Bem vindo $nomeUsuario</h2>";


    require "banco.php";
    $q = "SELECT * FROM tarefas WHERE cod_usuario=$codUsuario";
    $resp = $banco->query($q);

    //var_dump($resp);

    echo "<h3>Tarefas $nomeUsuario:</h3>";
    if($resp->num_rows <= 0){
        echo "Nenhuma tarefa";
    }else{
        while($tarefa = $resp->fetch_object()){
            $idTarefa = $tarefa->id;
            echo "<p> - " . $tarefa->titulo . "<a href='apagar.php?id=$idTarefa'> [apagar] </a></p>";
        }
    }

?>

<form action="add-tarefa.php" method="post">
    Nova Tarefa: <input type="text" name="nova-tarefa">
    <input type="submit" value="Salvar">
</form>