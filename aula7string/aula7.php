<?php

    $str = "joao";
    //$str = 'joaozinho';

    echo $str;
    var_dump($str);

    echo "<br>";

    echo $str[1] = "-";

    echo $str[0];
    echo $str[1];
    echo $str[2];
    echo "<br>$str";

    $tam = strlen($str);
    echo "<br>$tam";

    for ($i=0; $i < $tam; $i++){
        echo "<br>" . $str[$i];
    }

    echo "<hr>";

    echo "<br> teste de string";
    echo '<br> teste de string';

    echo "<br> mais um \teste de string";
    echo '<br> mais um \teste de string';

    echo '<br> mais um  \n teste de string';
    echo '<br> mais um  \n teste de string';

    $var = "oi";

    echo "<br>mais $var";
    echo '<br>mais $var';

    echo "<br> this isn't...";
    echo '<br> this isn\'t...';

    echo '<br> mais um "teste" de string';
    echo "<br> mais um \"teste\"de $var string";

    echo "<br> Deletar c:\\usuario\\teste\\php\\nicole\\";
    echo '<br> Deletar c:\usuario\teste\php\nicole\'';

    echo "<hr>";

    $num = 22;

    echo "<br> O valor é $num"; //Interpolação
    echo "<br> O valor é " . $num; //Concatenação

    echo "<br> O valor é $num+2"; //Interpolação
    echo "<br> O valor é " . $num+2; //Concatenação

    $array = ['Azul', "Amarelo", "Vermelho"];
    echo "<br> A cor da tabela é {$array[1]}";
    echo "<br> A cor da tabela é " . $array[2];

    //echo "<br> O nome é $array["nome"]";
    //echo '<br> O nome é $array["nome"]';
    //echo "<br> O nome é " . $array["nome"];
    echo '<br> O nome é {$array["nome"]}';

    echo "<hr>";

    $a = 10;
    $$a = "oi";
    $$$a = "teste";
    $$$$a = "php maluco";



    echo "<br> O valor de a é $a = {$$a} = {$$$a} = {$$$$a}";
    echo "<br> \$a = $a";
    echo "<br>$$$ a = {$$$a} = {$oi}";
    echo "<br> $$$$ a = {$$$$a} = {$teste}";

    echo "<hr>\n";


    /*heredoc & nowdoc
    $var = <<<TESTE
        <div name="oi" class="">
        <p>Valor de x é $num</p>
        </div>
    TESTE;

    echo $var2;
    */

    $str = "123abc";
    $tam = strlen($str);

    echo "<br> String $str";
    echo "<br> Tamanho $tam";

    $parte = substr($str, 2, 3);
    echo "<br> Parte: $parte";

    $str = "uM nOMe AquI";
    echo "<br> To Upper: " . strtoupper($str);
    echo "<br> To Lower: " . strtolower($str);
    echo "<br> Uc First: " . ucfirst($str);
    echo "<br> Uc Words: " . ucwords($str);
    echo "<br> Lower Words: " . ucwords(strtolower($str));
    echo "<br> Lower First: " . ucfirst(strtolower($str));


    $str = "uM nOMe AquI";
    $nova = str_replace("nOMe","nome", $str);
    echo "<hr> Palavra 'nome' formatado: $nova"; 








?>