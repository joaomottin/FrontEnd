<?php 

function calcularIMC(float $peso, float $altura) : float{
    return $peso / ($altura * $altura);
}

function classificarIMC(float $imc) : string {
    if($imc<18.5) return "Abaixo do peso";
    else if ($imc < 25) return "Peso padrão";
    else if ($imc < 30) return "Sobrepeso";
    else return "Thais Carla";
}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    
        <form method ="get">
            Peso  (em KG): <input type="text" name="peso"><br>
            Altura(em metros): <input type="text" name="altura"><br>
            Idade: <input type="text" name="idade"><br>
            <button type="submit">Enviar</button>
        </form>


    <?php 
    
    $peso = $_GET["peso"] ?? null;
    $altura = $_GET["altura"]?? null;
    $idade = $_GET["idade"]?? null;
    

    if(!is_null($peso)&&!is_null($altura)&&!is_null($idade)){

        if(!empty($altura)&&!empty($peso)&&!empty($idade)){

        $imc = calcularIMC($peso, $altura);  

        echo "<hr>";
        echo "<br>Peso: $peso";
        echo "<br>Altura: $altura";
        echo "<br>Idade: $idade";
        echo "<br>IMC: ". number_format($imc, 2, ",",".");
        echo "<br>Classificação IMC: ". classificarIMC($imc);

        //$imc=$peso/($altura*$altura);
        //echo "Seu IMC é igual à $imc";
        }
    }
    else {
        echo"<h3>Deu B.O. coloque todas as informações necessarias.</h3>";
    }


    ?>


</body>
</html>