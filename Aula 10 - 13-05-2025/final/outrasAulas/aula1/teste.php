<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    

    <h1>Aula 1 - HTML e PHP</h1>
   

    <a href="https://www.google.com.br">abrir google</a>

    <a href=""></a>



    <?php 
    
        echo "Ola Mundo";
        // print "Ola Mundo";
    
        echo "Ola <br> Joao";
        echo "\nOla Maria";

        echo "";
        $nome = "Robeerto";
        echo "<h2>Ola $nome!<h2>";

        $idade = "10";
        $n1 = 11;
        $n2 = 11.1;

        $chuva = false;

        echo "<h2>Idade: $idade.<h2>";
        echo "$n1 + $n2 = " . $idade + $chuva;

        echo "<br><br>";
        var_dump($idade);
        var_dump($chuva);
        var_dump($n1);
        var_dump($n2);
        
        
    ?>



</body>
</html>