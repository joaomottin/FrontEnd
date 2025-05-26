<h3>Tarefas <?=$nomeUsuario?>:</h3>

<?php

    if($resp->num_rows <= 0){
        echo "Nenhuma tarefa";
    }else{
        while($tarefa = $resp->fetch_object()){
            $idTarefa = $tarefa->id;
            ?>

            <p> 
                <?=$tarefa->texto?>
<a href='index.php?p=editar&id=<?=$idTarefa?>'>[editar]</a>
<a href='index.php?p=apagar&id=<?=$idTarefa?>'>[apagar]</a>
            </p>
            <?php
        }
    }

?>

<hr>
<form action="add-tarefa" method="post">
    Nova Tarefa: <input type="text" name="nova-tarefa">
    <input type="submit" value="Salvar">
</form>