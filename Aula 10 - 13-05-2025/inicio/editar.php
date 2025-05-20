<?php

    $idTarefa = $_GET['id'] ?? null;

    if(is_null($idTarefa)){
        header("Location: dashboard.php");
    }

    require "banco.php";

    $sql = "SELECT * FROM tarefas WHERE id=$idTarefa";
    $resp = $banco->query($sql);
    // var_dump($resp);
    
    $tarefa = $resp->fetch_object();
    var_dump($tarefa);

?>


<form action="atualizar-tarefa.php" method="post">
    id tarefa: <input type="text" name="id-tarefa" value="<?=$tarefa->id?>"> <br>

    <select name="id-usuario">
        <option value="1" <?= $tarefa->id_usuario == 1 ? "selected" : "" ?> >Joao</option>
        <option value="2" <?= $tarefa->id_usuario == 2 ? "selected" : "" ?> >Maria</option>
    </select><br>

    Texto: <input type="text" name="texto" value="<?=$tarefa->texto?>"><br>

    <input type="submit" value="Atualizar">
</form>

