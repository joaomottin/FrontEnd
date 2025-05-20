<!-- NÃO É CODIGO PHP / COMENTARIO HTML -->

<?php 

    // CODIGO PHP / COMENTARIO PHP

    echo "<h2>Ola Mundo!</h2>";
    print "<p>teste</p>";


    $nome = "Maria";
    $idade = 25;
    $salario = 2500.93;

    echo "<h3>Ola $nome</h3>";
    echo "$idade -- $salario";

    echo "<br>";
    var_dump($nome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($salario);


    echo "<hr>";
    $num1 = 6;
    $num2 = 12;

    $soma = $num1 + $num2;
    echo "$num1 + $num2 = $soma";
    echo "$num1 + $num2 = " . $num1 + $num2;

    echo "<hr>";

    echo "<br> > $num1";
    $num1 += 1;
    
    echo "<br> > $num1";

    $num1++;
    echo "<br> > " . ++$num1 . "----";


    echo "<br> > " . $num1++;


    echo "<hr>";

    // $num3 = "30ui40";
    $num3 = true;
    $num4 = 5;

    echo "<br>";
    var_dump($num3);

    echo "<br>";
    var_dump($num4);

    echo "<br>";
    echo "$num3 + $num4 = " . $num3 + $num4;



?>