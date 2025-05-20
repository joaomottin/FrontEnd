<?php

    /*
    $str = "abc";
    // $str = 'um texto';

    // echo $str;
    // var_dump($str);

    $str[1] = "-";

    echo $str[0];
    echo $str[1];
    echo $str[2];
    $str[3] = "4";
    echo "<br>$str";

    $tam = strlen($str);
    echo "<br>" . $tam;

    for ($i=0; $i < $tam; $i++) { 
        echo "<br>" . $str[$i];
    }

    echo "<hr>";

    echo "<br> teste de string";
    echo '<br> teste de string';

    echo "<br> mais um \teste de string";
    echo '<br> mais um \teste de string';

    echo "<br> mais um \n teste de string";
    echo '<br> mais um \n teste de string';

    $var = "oi";
    echo "<br> mais $var";
    echo '<br> mais $var';

    // echo '<br> this isn't...';
    echo "<br> this isn't...";
    echo '<br> this isn\'t...';

    echo '<br> mais um "teste" de string';
    echo "<br> mais um \"teste\" de $var string";


    // echo "Deletar c:\usuario\teste\php\nicole\";"
    echo '<br>Deletar c:\\usuario\teste\php\nicole\ ';
    echo "<br>Deletar c:\\usuario\\teste\\php\\nicole\\";

    echo "<hr>";

    $num = 22;
    echo "<br>O valor é $num + 2"; // interpolar
    echo "<br>O valor é " . $num + 2; // concatenar

    $array = ['Azul', "Amarelo", "Vermelho tbm", "nome" => 'joao'];
    echo "<br> A cor da bola é $array[1]";
    echo "<br> A cor da bola é " . $array[2];

    //echo "<br> O nome é $array["nome"]";
    // echo "<br> O nome é $array['nome']";
    echo '<br> O nome é {$array["nome"]}';
    echo "<br> O nome é {$array["nome"]}";
    echo "<br> O nome é " . $array["nome"];

    echo "<hr>";

    $a = "a10";
    $$a = "oi";
    $$$a = "teste";
    $$$$a = "php maluco";
    // $a10

    // echo "<br>O valor de a é $a = {$$a} = $a10";
    echo "<br> \$a = $a";
    echo "<br> $$ a = {$$a} = {$a10}";
    echo "<br> $$$ a = {$$$a} = {$oi}";
    echo "<br> $$$$ a = {$$$$a} = {$oi}";

    echo "<hr>\n";


    // heredoc & nowdoc

    //heredoc
    $num = 55;
    $var = <<<TESTE
        <div name="oi" class="">
                <p>Valoe de x é $num</p>
        </div>
    TESTE;

    echo $var;

    $var2 = <<<'TESTE'
        <div name="oi" class="">
                <p>Valoe de x é $num</p>
        </div>
    TESTE;

    echo $var2;
    */

    $str = "123abc";
    $tam = strlen($str);

    echo "<br> String: $str";
    echo "<br> Tamanho: $tam";

    $parte = substr($str, 2, 3);
    echo "<br> Parte: $parte";

    $str = "uM nOMe AquI";
    echo "<br><br> String: $str";
    echo "<br> To Upper: " . strtoupper($str);
    echo "<br> To Lower: " . strtolower($str);
    echo "<br> Uc First: " . ucfirst($str);
    echo "<br> Uc Words: " . ucwords($str);
    echo "<br> Lower + Words: " . ucwords(strtolower($str));
    echo "<br> Lower + First: " . ucfirst(strtolower($str));


    $str = "uM nOMe AquI";
    $nova = str_replace("nOMe", "nome", $str);
    echo "<br><br> String: $str -- $nova";
    
    // -------- Resumo e outras funcoes
	/*

	number_format(); // formatação de numero
	printf(); // formatação
	print_r(); // Pode mostrar 
	var_dump();

	strlen(); // tamanho da string
	
	trim(); // remove espaçõs antes de depois das palavras
	ltrim(); // remove espaços do inicio
	rtrim(); // remove espaçoes do final

	str_word_count(); // conta as palavras na frase
	
    // "quebra a frase" => ["quebra", "a", "frase"];
    explode(); // quebra a frase em array dividindo pelo character espaço
	implode(); // junta um array de string em uma string só
	
    str_split(); // quebra a string por cada letra e não palavras
	join(); // a mesma coisa

	chr(); // pega a letra dado o codigo dela
	ord(); // ver o cóodigo da letra

	strlower(); // retorna tudo minusculo
	strupper(); // retorna tudo maiúsculo
	ucfisrt(); // retorna primeira letra maiúscula
	ucwords(); // retorna primeira letra de cada palavra maiúscula

	strrev(); // inverte a string
	
    strpos(); // retorna a posição em que a string foi encontrada
	stripos(); // a mesma coisa ignorando maiúsculo/minúsculo
	substr_count(); // conta as vezes que uma frase/palavra foi encontrada em outra

	substr(); // pega um pedaço da string

	str_pad(); // faz a string ocupar um determinado tamanho 
	str_repeat(); // repete a string varias vezes
	str_replace(); // troca um pedaço da string por outro
	*/

    $str = "oiç";
    var_dump($str);

?>