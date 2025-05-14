<?php     

    $idTarefa = $_GET['id'] ?? null;

    if (is_null($idTarefa)){
        die ("error");
    }

    require "banco.php";

    $sql = "SELECT * FROM tarefas WHERE id=$idTarefa";
    $resp = $branco->query($sql);

    if($resp->num_rows <= 0){
        die ("erro");
    }

    $tarefa = $resp->fetch_object();
    var_dump($tarefa);



















    ?>