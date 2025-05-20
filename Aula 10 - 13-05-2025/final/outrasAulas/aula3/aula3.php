<?php 

    // for(int i  = 0 ; i < 5; i++){}

    /*
    for($i = 0; $i < 5; $i++){
        echo "<br> Contador: $i";
    }

    $valor = 0;
    while($valor < 5){
        echo "<br> While: $valor";
        $valor += 2;
    }

    $valor = 0;
    do {
        echo "<br> Do While: $valor";
        $valor += 1.2;
    }while($valor < 5);

    // foreach

    echo "<hr>";

    $um_array = [];
    $outro_array = array();

    var_dump($um_array);
    var_dump($outro_array);
    echo "<br><br>";

    $frutas = ["Maça", "Banana", "Laranja", "Uva"];
    // var_dump($frutas);
    print_r($frutas);

    echo "<br><br>";
    $numeros = [1, 5.3, 7, 9.678, 30];
    var_dump($numeros);
    
    echo "<br><br>";
    $tudo = [1, false, "ola", 1.99, 4, "adeus", true];
    var_dump($tudo);
    */

    echo "<hr>";
    $frutas = ["Maça", "Banana", "Laranja", "Uva"];

    echo "Lista de Compras";

    for($i=0; $i < 4; $i++){
        // echo "<br> - Item: " . $frutas[$i];
        $fr = $frutas[$i];
        echo "<br> - Item: $fr";
    }


    // para cada ITEM na LISTA
    foreach($frutas as $item){
        echo "<br> ** Item: $item";
    }

    echo "<hr>";
    // $pessoa = ["joão", "silva", 18, "cwb"];
    $pessoa = [
        "nome"   => "joão", // 0X -- "nome
        "sobre"  => "silva", // 1
        "idade"  => 18,  // 2
        "cidade" => "cwb"]; //s


    // echo "Nome: " . $pessoa[0];
    // echo "Idade: " . $pessoa[1];

    echo "<br>Nome: " . $pessoa["nome"];
    echo "<br>Idade: " . $pessoa["idade"];

    echo "<pre>";
    //var_dump($pessoa);
    print_r($pessoa);
    echo "</pre>";

    echo "<hr>";

    $turma = [
        ["Joao", "Silva", "idade" => 18, "cwb"],
        ["Maria",         "idade" => 19, "sjp"],
        ["Roberta",       "idade" => 20, "sp"]
    ];

    /*for($i = 0;$i < 3; $i++){
        echo "<h3>Aluno(a) " . $turma[$i][0] . "</h3>";
        echo "<p>Idade: " . $turma[$i]["idade"] . "</p>";
        echo "<p>Cidade: " . $turma[$i][2] . "</p>";
    }*/


    $turma = [
        ["nome" => "Joao",    "idade" => 18, "cidade" => "cwb"],
        ["nome" => "Maria",   "idade" => 19, "cidade" => "sjp"],
        ["nome" => "Roberta", "idade" => 20, "cidade" => "sp"]
    ];

    foreach($turma as $aluno){
        echo "<h3>Aluno(a) " . $aluno["nome"] . "</h3>";
    }



?>