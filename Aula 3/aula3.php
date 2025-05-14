<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewind last class</title>
</head>
<body>
    
    <h2>Employee's data</h2>

    <?php 
        $name = "John";
        $age = 18;
        $wage = 2000.50;
        $college = "Computer Science";
    
        echo "<p><strong>Nome: </strong>$name</p>";
    ?>

    <p><strong>Idade: </strong> <?php echo $age; ?> </p> 

    <p><strong>Faculdade: </strong><?= $college?></p> <!-- Melhor jeito -->

    <p><strong>Salário: </strong><?= number_format($wage, 2, ",", ".")?></p>


    <?php if ($age >= 18): ?>
        <p style='color: green;'>Employee legal of age</p>

    <?php else: ?>
        <p style='color: red;'>Employee underage</p>

    <?php endif; ?>

</body>
</html>