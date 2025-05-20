<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="get">
        Numero 1: <input type="number" name="n1"><br>
        Numero 2: <input type="number" name="n2"><br>
        <button type="submit">Enviar</button>
    </form>
    
    <?php 
        $a = $_GET["n1"] ?? null;
        $b = $_GET["n2"] ?? null;

        if(!is_null($a) && !is_null($b)){
            $soma = $a + $b;
            echo "<h3>$a + $b = $soma</h3>";
        }else{
            echo "<h3>Digite os 2 numeros...</h3>";
        }
    ?>

</body>
</html>