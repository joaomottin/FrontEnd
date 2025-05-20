<?php


    // https://www.google.com/search ? q = aula+php

    // echo $_GET;
    var_dump($_GET);
    
    // echo $_GET["n1"];
    // echo $_GET["n2"];
    
    // aula4.php ? n1=40 & n2=100
    $a = $_GET["n1"];
    $b = $_GET["n2"];
    
    $soma = $a + $b;
    echo "$a + $b = $soma";




    // aula4.php ? n1=40 & n2=100
    $a = null;
    $b = 0;

    if(isset($_GET["n1"])){
        $a = $_GET["n1"];
    }else{
        $a = 0;
    }

    if(isset($_GET["n2"])){
        $b = $_GET["n2"];
    }

    
    $soma = $a + $b;
    echo "$a + $b = $soma";






    $a = isset($_GET["n1"]) ? $_GET["n1"] : 0;
    $b = isset($_GET["n2"]) ? $_GET["n2"] : 0;

    $soma = $a + $b;
    echo "$a + $b = $soma";





    $a = $_GET["n1"] ?? 0;
    $b = $_GET["n2"] ?? 0;

    $soma = $a + $b;
    echo "$a + $b = $soma";


?>