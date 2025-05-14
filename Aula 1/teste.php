<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula</title>
</head>
<body>
    <h1>h1</h1> 
    <h2>h2</h2>   

    <a href="https://www.google.com.br/?hl=pt-BR">gugou</a>

    <?php
        echo "ola world";
        echo "\nola mundo"; // o \n no codigo nao quebra a linha na pagina web, quebra somente no codigo fonte
        echo "<br>ola quebra";  // se voce quiser quebrar a linha na pagina, precisa colocar um <br>

        $nome = "rodolfo";
        echo "<h2> Ola $nome!<h2>";
        
        $idade = 10;
        $n1 = 1.1;
        $n2 = 2.2;
        $chuva = true;
        $huva = false;

        echo "<h2>Idade: $idade. <h2>";
        echo "$n1 + $n2 = " . $n1 + $n2;
        echo "<br>$n1 + $n2 = " . $idade + $chuva; // idade = 10 e o valor de TRUE == 1 e FALSE == 0
        echo "<br>$n1 + $n2 = " . $idade + $huva;


    ?>

</body>
</html>