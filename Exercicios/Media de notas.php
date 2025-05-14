<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media de notas</title>
</head>
<body>
    

    <h2>Média de notas</h2>

    <?php
    
    $aluno = "João Pedro Mottin";
    $nota1 = 10;
    $nota2 = 6.9;
    $nota3 = 10;
    $nota4 = 5.8;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    $media = number_format($media, 2, ",", ".");

    echo "<br>";
    echo "<strong>Média:</strong>$media";

    ?>

    <?php if ($media >= 7){ ?>
        <pp style="color: green;" class="" id=""> - Aprovado!</p>
    <?php } else { ?>
        <pp style="color: red;" class="" id=""> - Reprovado!</p>
        <?php } ?>
    
    
</body>
</html>