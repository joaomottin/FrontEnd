<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    
    <h1>Exemplo 1</h1>

    <?php

use BcMath\Number;

    $nome = "Maria";
    $idade = 25;
    $salario = 2500.93;
    
    echo "<p>Nome: <strong>$nome</strong></p>";
    ?>

    <p>Idade: 
        <strong> 
            <?php echo "$idade";?> 
        </strong>
    </p>

    <p> Salário: 
        <strong>
            <?php echo "R$$salario";?>
        </strong>
    </p>

    <?php $salario2 = number_format($salario, 2, ",", ".");?>
    <p> Salário Formatado
        <strong>
            <?php echo "R$$salario2";?>
        </strong>
    </p>

</body>
</html>