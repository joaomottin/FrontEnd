<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relembrando Aula 2</title>
</head>
<body>

    <h2>Dados do Funcionario</h2>

    <?php  
        $nome = "João";
        $idade = 19;
        $salario = 16523000.19889;
        $facul = "ads";

        echo "<p><strong>Nome: </strong>$nome</p>";
    ?>

    <p><strong>Idade: </strong> <?php echo $idade; ?> </p>
    <p><strong>Facul: </strong> <?= $facul ?> </p>

    <!-- comentario html -->
    <p><strong>Salario: R$ </strong> 
        <?= number_format($salario, 2, ", ", ".") ?>
    </p>

    <?php if($idade >= 18): ?>
        <p style='color: green;' id="" class="">Funcionario MAIOR de idade.</p>
    <?php else:?>
        <p style='color: red;' id="" class="">Funcionario MENOR de idade.</p>
    <?php endif; ?>
    
</body>
</html>