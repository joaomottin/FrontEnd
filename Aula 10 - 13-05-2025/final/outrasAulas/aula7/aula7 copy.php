<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $tuite = $_POST["tuite"] ?? null;
        $erros = [];

        if(is_null($tuite)){
            $erros['tuite'] = "erro - null";
        }

        $tuite = trim($tuite);
        $tam = strlen($tuite);
        if(empty($tuite)){
            $erros['tuite'] =  "erro - em branco";
        }
        else if($tam < 5){
            $erros['tuite'] =  "erro - digite pelo menos 5 caracteres";
        }
        else if($tam > 10){
            $erros['tuite'] =  "erro - digite até 10 caracteres";
        }


        echo "<br> > " . $tuite;
    }



?>

<form method="post">
    Texto: <input type="text" name="tuite" value="<?= $tuite ?? "" ?>">
    <p style="color:red"><?= $erros['tuite'] ?? '👍' ?></p>
        
    <input type="submit" value="Enviar">
</form>