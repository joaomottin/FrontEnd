<?php

for ($i=0;$i<5;$i++){
    echo "<p>Contador: $i</p>";
}


$valor = 0;
while($valor < 5){
    echo "<p>While> $valor";
    $valor +=2;
}

do {
    echo "<br> <br>Do While: $valor";
} while ($valor<5);


// foreach

echo "<hr>";

$um_array = [];
$outro_array = array();

var_dump($um_array);
var_dump($outro_array);

echo "<br> <br>";

$frutas = ["Maçã", "Banana", "Laranja", "Uva"];
//var_dump($frutas);
print_r ($frutas);

echo "<br> <br>";

$numeros = [1,5.3,7,9.678,30];
var_dump($numeros);

echo "<br> <br>";

$tudo = ["fodase", 1, false, 1.94, "batuque", true];
var_dump($tudo);

echo "<hr>";

$frutas = ["Maçã", "Banana", "Laranja", "Uva"];

echo "Lista de Compras";

for ($i=0;$i<4;$i++) {
    //echo "<br> - Item: " . $frutas[$i];
    $fr = $frutas[$i];
    echo "<br> - Item: $fr";
}

//Para cada ITEM na LISTA
foreach ($frutas as $item){
    echo "<br> * Item: $item";
}

echo "<hr>";

// $pessoa = ["João", "Mottin",21, "Curitiba"];
$pessoa = [
"nome" => "João",
"sobrenome" => "Mottin",
"idade"=>18,
"cidade"=>"Curitiba"
];


//echo $pessoa[0];
echo "Nome: ". $pessoa["nome"];
echo "<br>Idade: ". $pessoa["idade"];
//var_dump($pessoa);

echo "<pre>";
//var_dump($pessoa);
print_r($pessoa);
echo "</pre>";

echo "<hr>";

$turma = [
    ["nome" =>"João","idade"=>18,"cidade" =>"cwb"],
    ["nome" =>"Julia","idade"=>17,"cidade" =>"sp"],
    ["nome" =>"Thiago","idade"=>21,"cidade" =>"bh"]
];

/*for ($i=0;$i<3;$i++){
    echo "<h3>Aluno(a): " . $turma[$i][0] . "</h3>";
    echo "<p>Idade: " . $turma[$i]["idade"] . "</h3>";
    echo "<p>Cidade: " . $turma[$i][2] . "</h3>";
}*/

foreach ($turma as $aluno){
    echo "<h3>Aluno(a) ".$aluno["nome"];
}





?>