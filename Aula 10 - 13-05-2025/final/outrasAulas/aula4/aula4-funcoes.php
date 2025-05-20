<?php

    declare(strict_types=1);

function tituloLegal($texto)
{
    echo "<h2>#####################</h2>";
    echo "<h2>## $texto ##</h2>";
    echo "<h2>#####################</h2>";
}


/*
    echo "<h2 class='' id='' name=''>Aula 04</h2>";

    // void, int, float, string, bool, fun, def -> function
    function tituloAula4(){
        echo "<h2 class='' id='' name=''>Aula 04</h2>";
    }

    tituloAula4();
    tituloAula4();
    tituloAula4();
    tituloAula4();

    function criarTitulo($texto){
        echo "<h2>$texto</h2>";
    }

    
    criarTitulo("Aula Funcoes");
    criarTitulo("Outra Aula 4");


    
    tituloLegal("Calcular Medias");

    function calcularMedias($nome, $nota1, $nota2){

        $media = ($nota1 + $nota2) / 2;

        if($media >= 6){
            echo "<p>O aluno(a) $nome froi aprovado com média $media!</p>";
        }else{
            echo "<p>O aluno(a) $nome foi reprovado com média... melhor não saber :O </p>";
        }

    }

    calcularMedias("Andre", 10, 10);
    calcularMedias("Matheus", 2, 7.1);
    calcularMedias("Lucas", 3.2, 8.9);


    function somar($a, $b){
        $soma = $a + $b;
        echo "<li> $a + $b = $soma";
    }

    echo "<br> Lista de somas: ";
    somar(1, 1);
    somar(2, 5);
    somar(9, 11);

    echo "<br>";
    function somarNumeros(...$numeros){
        // var_dump($numeros);
        $soma = 0;
        echo "<li>";

        for ($i=0; $i < count($numeros); $i++) { 
            $soma += $numeros[$i];
            echo $numeros[$i] . " + ";
        }

        echo " = $soma";

    }

    // somarNumeros([2, 3, 5, 6]);
    somarNumeros(2, 2, 10, 22, 22, 18, 17, 0);
    somarNumeros(2, 2, 3);

    echo "<br>";
    function fazalgo($nome, $numero, $texto, ...$coisas){
        var_dump($coisas);
    }


    fazalgo("joao", 55, "oi", false, "outro texto", 19.30);
    fazalgo("joao", 55, "oi");

*/


    tituloLegal("Outras Funcoes");

    $verdadeira = false;

    if ($verdadeira) {
        function calcularIdade($nome, $ano)   {
            $idade = 2025 - $ano;
            echo "<p>O $nome tem $idade anos.</p>";
        }
    }

    if ($verdadeira) {
        calcularIdade("Jose", 2006);
    }


    function aleatoria(){

        echo "<br> Aleatoria: ";

        function gerarNumero(){
            echo "7";
        }

    }

    
    aleatoria();
    gerarNumero();

    echo "<hr>";

    function somaCinco(&$num){
        $num += 5;
        echo "<br> Num: $num";
    }

    $var1 = 20;

    echo "<br> Var: $var1";
    somaCinco($var1);  

    echo "<br> Var: $var1";


    function subtracao($a=20, $b=2){
        $sub = $a - $b;
        echo "<li> $a - $b = $sub";
    }

    subtracao(10, 5);
    subtracao(-10, -5);
    subtracao(10);
    subtracao();

    echo "<br>";
    function divisao(float $n1, float $n2) : float{
        var_dump($n1);
        var_dump($n2);
        $div = $n1 / $n2;
        return $div;
    }

    // divisao("10", 10);
    divisao(10, 10);

    
    $teste = "divisao";
    $teste(10, 22);
    