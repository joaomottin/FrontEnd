<?php 

declare(strict_types=1);

// Título da aula
function tituloAula4(){
    echo "<h1 class='' id='' name=''>Aula quatro</h1><br>";
}

echo "<h1 class='' id='' name=''>Aula quatro</h1><br>";
tituloAula4();
tituloAula4();
tituloAula4();
tituloAula4();
tituloAula4();
tituloAula4();

echo "<hr>"; // Separador

// Criar título dinâmico
function criarTitulo(string $texto){
    echo "<h2>$texto</h2><br>";
}

criarTitulo("Aula funções");
criarTitulo("Outra aula 4");

echo "<hr>"; // Separador

// Exibir título estilizado
function tituloLegal(string $texto){
    echo "<h2>############</h2><br>";
    echo "<h2>## $texto ##</h2><br>";
    echo "<h2>############</h2><br>";
}

tituloLegal("Exemplo 1");
tituloLegal("Exemplo 2");
tituloLegal("Exemplo 3");

echo "<hr>"; // Separador

// Calcular média do aluno
function calcularMedias(string $nome, float $nota1, float $nota2){
    $media = ($nota1 + $nota2) / 2;
    echo ($media >= 6) 
        ? "<p>Aluno $nome aprovado com média $media</p><br>" 
        : "<p>Aluno $nome reprovado com média $media</p><br>";
}

calcularMedias("Andre", 9, 7);
calcularMedias("Matheus", 2, 7.1);
calcularMedias("Lucas", 4, 9);

echo "<hr>"; // Separador

// Função de soma simples
function somar(float $a, float $b){
    $soma = $a + $b;
    echo "<p>$a + $b = $soma</p><br>";
}

somar(4.28, 15.72);

echo "<hr>"; // Separador

// Função para somar múltiplos números
function somarNumeros(float ...$numeros){
    $soma = 0;
    for ($i = 0; $i < count($numeros); $i++) {
        $soma += $numeros[$i];
        echo "$numeros[$i] + ";
    }
    echo "= $soma<br>";
}

somarNumeros(2, 2, 10, 22, 22, 18, 17, 0);
somarNumeros(2, 2, 3);

echo "<hr>"; // Separador

// Função para exibir variações de parâmetros
function fazAlgo(string $nome, int $numero, string $texto, ...$coisas){
    var_dump($coisas);
    echo "<br>";
}

fazAlgo("João", 69, "do pão", false, "extra", 420.69);

echo "<hr>"; // Separador

tituloLegal("Outras funções");

// Função condicional para calcular idade
$verdadeiro = true;
if ($verdadeiro){
    function calcularIdade(string $nome, int $idade){
        echo "<p>$nome tem $idade anos.</p><br>";
    }
}

if ($verdadeiro){
    calcularIdade("Jose", 18);
}

echo "<hr>"; // Separador

// Função dentro de outra função
function aleatoria(){
    echo "<br>Aleatória: ";
    function gerarNumero(){
        echo "7";
    }
}

aleatoria();
gerarNumero();

echo "<hr>"; // Separador

// Passagem de parâmetro por referência
function somaCinco(int &$num){
    $num += 5;
    echo "<br>Num: $num<br>";
}

$var1 = 20;
echo "<br>Var: $var1<br>";
somaCinco($var1);
echo "<br>Var: $var1<br>";

echo "<hr>"; // Separador

// Função de subtração com valores padrão
function subtracao(int $a = 20, int $b = 2){
    $sub = $a - $b;
    echo "<p>$a - $b = $sub</p><br>";
}

subtracao(10, 5);
subtracao(-10, -5);
subtracao(10);
subtracao();

echo "<hr>"; // Separador

// Função de divisão
function divisao(float $n1, float $n2): float{
    if ($n2 == 0) {
        echo "<p>Erro: Divisão por zero!</p><br>";
        return 0;
    }
    return $n1 / $n2;
}

echo "<p>Resultado da divisão: " . divisao(10, 2) . "</p><br>";

echo "<hr>"; // Separador

// Chamada de função usando variável
$teste = "divisao";
echo "<p>Resultado da chamada via variável: " . $teste(10, 22) . "</p><br>";

?>
