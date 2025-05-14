<?php 


// https://www.google.com/search ? q = aula+php

//echo $_get
//var_dump($_GET);

//aula4.php ? n1=40 $ n2=100
//echo $_GET["n1"];
//echo $_GET["n2"];


//$a = $_GET["n1"];
//$b = $_GET["n2"];
//
//$soma = $a + $b;
//echo "$a + $b = $soma";


//$a = 0;
//$b = 0;
//
//if(isset($_GET["n1"])){
//    $a = $_GET["n1"];
//}
//if(isset($_GET["n2"])){
//    $b = $_GET["n2"];
//}
//
//$soma = $a + $b;
//echo "$a + $b = $soma";

/*$a = isset($_GET["n1"]) ? $_GET["n1"] : 7;
$b = isset($_GET["n2"]) ? $_GET["n2"] : 10;

$soma = $a + $b;
echo "$a + $b = $soma";*/

$a = $_GET["n1"] ?? 7;
$b = $_GET["n2"] ?? 80;

$soma = $a + $b;
echo "$a + $b = $soma";








?>