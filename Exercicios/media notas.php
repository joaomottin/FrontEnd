<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media de notas</title>
</head>
<body>
    

    <h2>Media de notas</h2>

    <?php
    
    $idade = 18;
    $tem_ingresso = true;

    //if($idade >= 18 && $tem_ingresso){
    //    echo "<p>Acesso liberado!</p>";
    //}
    //else {
    //    echo "<p>Acesso negado!</p>";
    //}
    
    ?>

    <?php if($idade >= 18 && $tem_ingresso){ ?> 
        <p style="color: green;" class="" id"">Acesso liberado!</p> <!-- Nesse caso, eu FECHO o PHP para que o CSS agir, então somente depois do CSS agir, abrimos o PHP novamente com as chaves para que a mensagem seja computada com sucesso! -->
    <?php } else { ?>
        <p style="color: red;" class="" id"">Acesso negado.</p>
    <?php } ?>


    <?php if($idade >= 18 && $tem_ingresso): ?> <!-- Maneira alternativa para não precisar ficar abrindo e fechando a porra das chaves-->
        <?php else: ?>
        <?php endif; ?>



</body>
</html>