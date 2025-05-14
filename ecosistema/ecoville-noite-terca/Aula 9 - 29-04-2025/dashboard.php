<?php

    session_start();
    $codUsuario = $_SESSION['id_usuario'] ?? null;
    $nomeUsuario = $_SESSION['usuario'] ?? null;

    if(is_null($codUsuario)){
        header("Location: login.php");
    }

    // echo "<h2>Bem vindo $nomeUsuario</h2>";


    require "banco.php";
    $q = "SELECT * FROM tarefas WHERE id_usuario=$codUsuario";
    $resp = $banco->query($q);

    //var_dump($resp);

    echo "<h3>Tarefas $nomeUsuario:</h3>";
    if($resp->num_rows <= 0){
        echo "Nenhuma tarefa";
    }else{
        while($tarefa = $resp->fetch_object()){
            $id = $tarefa->id;
            echo "<p> - " . $tarefa->texto;
            echo " <a href='apagar.php?id->id}'> - [apagar]</a>";
            echo " <a href='editar.php?id->id}'> - [editar]</a>";
            echo "</p>";
               }
    }

?>

<form action="add-tarefa.php" method="post">
    Nova Tarefa: <input type="text" name="nova-tarefa">
    <input type="submit" value="Salvar">
</form>
