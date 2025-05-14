<?php
    $idTarefa=$_GET['id'] ?? null;

    if(is_null($idTarefa)){
        header("Location: dashboard.php");
    }

    require "banco.php";

    $resp = $banco->query("SELECT * FROM tarefas WHERE id='$idTarefa'");
    
    //var_dump($resp);
    $tarefa=$resp->fetch_object();
    //var_dump($tarefa);
    ?>

<form action="" method="post">
    id tarefa: <input type="text" name="id" value="<?=$tarefa->id?>"> <br>

    <select name="atualizar-tarefa">
        <option value="1" <?=$tarefa->id_usuario == 1 ? "selected" : ""?>>João </option>
        <option value="2" <?=$tarefa->id_usuario == 2 ? "selected" : ""?>>Maria </option>
    </select><br>

    Texto: <input type="text" name="texto" value="<?=$tarefa->texto?>"><br>

    <input type="submit" value="Atualizar">
</form>

