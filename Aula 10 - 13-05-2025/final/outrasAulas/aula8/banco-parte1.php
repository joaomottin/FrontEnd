<?php


    $banco = new mysqli("localhost:3307", "root", "", "php-terca-noite");
    
    echo "<pre>";
    // var_dump($banco);
    // echo "</pre>";

    $q = "SELECT * FROM usuarios";
    $resp = $banco->query($q);

    // var_dump($resp);
    $usu = $resp->fetch_object();
    print_r($usu);

    $usu2 = $resp->fetch_object();
    print_r($usu2);

    echo "<hr>";
    $q = "SELECT * FROM usuarios WHERE usuario='joao'";
    $resp = $banco->query($q);
    // var_dump($resp);

    $usu = $resp->fetch_object();
    print_r($usu);

    // Colunas da tabela - Variaveis do objeto (da busca)
    echo "ID: " . $usu->id;
    echo "Usuario: " . $usu->usuario;
    echo "Email: " . $usu->email;
    echo "Senha: " . $usu->senha;


?>