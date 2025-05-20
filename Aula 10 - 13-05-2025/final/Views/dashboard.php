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
                <a href='apagar.php?id=<?=$idTarefa?>'>[apagar]</a>
                <a href='editar.php?id=<?=$idTarefa?>'>[editar]</a>
            </p>
            
            <?php
        }
    }

?>

<hr>
<form action="add-tarefa.php" method="post">
    Nova Tarefa: <input type="text" name="nova-tarefa">
    <input type="submit" value="Salvar">
</form>