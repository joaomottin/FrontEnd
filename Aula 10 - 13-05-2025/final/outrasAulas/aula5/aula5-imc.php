<?php

    function calcularIMC(float $peso, float $altura) : float {
        return $peso / ($altura ** 2);
    }

    function classificarIMC(float $imc) : string {
        if($imc < 18.5) return "abaixo do peso";
        else if($imc < 25) return "Peso normal";
        else if($imc < 30) return "Sobrepeso";
        else return "Obesidade";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>

    <h2>Calculadora de IMC</h2>

    <form action="" method="get">
        Altura: <input type="number" name="altura" step="0.1">
        Peso: <input type="number" name="peso" step="0.1">
        Idade: <input type="number" name="idade">
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
        
        var_dump($_GET);

        $altura = $_GET["altura"] ?? null;
        $peso = $_GET["peso"] ?? null;
        $idade = $_GET["idade"] ?? null;

        if(!is_null($altura) && !is_null($peso) && !is_null($idade)){
            

            if(!empty($altura) && !empty($peso) && !empty($idade)){
                // echo "<h3>agora sim</h3>";
                $imc = calcularIMC($peso, $altura);

                echo "<hr>";
                echo "<br>Peso: $peso";
                echo "<br>Altura: $altura";
                echo "<br>Idade $idade";
                echo "<br>IMC: " . number_format($imc, 2, ", ", ".");
                echo "<br>IMC: " . classificarIMC($imc);
                                
                // $imc = $peso / ($altura ** 2); // pow(altura, 2); - altura * altura;
                // echo "<br>IMC: $imc";


            }else{
                echo "<h3>Valores em branco...</h3>";
            }

        }else{
            echo "<h3>Digite os valores...</h3>";
        }



    ?>

</body>
</html>