<?php

    require "validator.php";

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $tuite = $_POST["tuite"] ?? null;
        $erros = [];

        if(campoObrigatorio($tuite)){
            $erros['tuite'] = "* Campo Obrigatório.";
        }

        else if(tamanhoString($tuite)){
            $erros['tuite'] = "* Digite entre 5 e 10 caracteres.";
        }
        

        echo "<br> > " . $tuite;
    }



?>

<form method="post">
    Texto: <input type="text" name="tuite" value="<?= $tuite ?? "" ?>">
    <p style="color:red"><?= $erros['tuite'] ?? '👍' ?></p>
        
    <input type="submit" value="Enviar">
</form>