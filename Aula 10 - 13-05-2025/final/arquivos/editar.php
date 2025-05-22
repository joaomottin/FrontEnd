<form action="atualizar-tarefa.php" method="post">
    id tarefa <input type="text" name="id" value="<?=$tarefa->id?>"><br>

    <select name="id-usuario">
        <option value="1" <?= $tarefa->id_usuario == 1 ? "selected" : "" ?> >Joao</option>
        <option value="2" <?= $tarefa->id_usuario == 2 ? "selected" : "" ?> >Maria</option>
    </select><br>
    
    texto tarefa <input type="text" name="texto" value="<?=$tarefa->texto?>"><br>
    <input type="submit" value="Salvar">
</form>