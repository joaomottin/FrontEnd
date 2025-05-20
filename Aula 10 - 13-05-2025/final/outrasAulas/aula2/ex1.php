<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>

    <h1>Exemplo 01</h1>

    <?php 
    
        $nome = "Maria";
        $idade = 23;
        $salario = 2503330.9399;
    
        echo "<p>Nome: <strong>$nome</strong></p>";
    ?>

    <p>
        Idade: 
        <strong> 
            <?php 
                echo "$idade"; 
            ?>
        </strong>
    </p>

    <p>Salário: <strong> <?= $salario ?> </strong></p>

    <?php $salario2 = number_format($salario, 2, ", ", " ") ?>
    <p>Salário2: <strong> <?= $salario2 ?> </strong></p>
    
</body>
</html>