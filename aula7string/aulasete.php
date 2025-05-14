<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $tuite = $_POST["tuite"] ?? null;

        if(is_null($tuite)){
            echo "<br> erro - null";
        }

        $tuite = trim($tuite);
        if(empty($tuite)){
            echo "<br> erro - em branco";
        }

        $tam = strlen($tuite)
        if($tam<5){
            echo "erro - digite pelo menos 5 caracteres";
        }



        echo "<br> " . $tuite;

    }

?>

<form method="post">
    Texto: <input type="text" name="tuite">
    <input type="submit" value="Enviar">
</form>