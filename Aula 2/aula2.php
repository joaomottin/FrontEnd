<!-- Não é código PHP / Comentario HTML -->

<?php

// Código PHP / Comentário PHP

    echo "<h2>Olá mundo!</h2>"; // Apesar do código em php considerar esse <h2> como só uma string, o HTML identifica e modifica no arquivo final, sendo uma ordem de hierarquia 2.

    echo "<p>Teste</p>";


    $nome = "Maria";
    $idade = 25;
    $salario = 2500.93;


    echo "<h3> Olá $nome</h3>";
    echo "Idade: $idade <br>Salario:R$$salario";

    echo "<br>";
    var_dump($nome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($salario);
    echo "<br>";

$num1 = 6;
$num2 = 12;
    
    echo "<hr>";

$soma = $num1 + $num2;
echo "$num1 + $num2 = $soma";
echo "<br>";
echo "$num1 + $num2 = ". $num1 + $num2;


    echo "<hr>";

    echo "<br> > $num1";
    $num1 += 1;

    echo "<br> > $num1";

    $num1++;
    echo "<br> > $num1";

    echo "<hr>";

    //$num3 = "40iu"; (Observação: Mesmo sendo uma string, ele faz a soma de qualquer maneira)
    $num3 = true;
    $num4 = 5;

    echo "<br>";
    var_dump($num3);

    echo "<br>";
    var_dump($num4);

    echo "<br>";
    echo "$num3 + $num4 =". $num3+$num4;

    echo"<hr>";

?>