<?php


    // setcookie("idioma", "pt-BR", time() + 60);
    // setcookie("usuario", "roberto32", time() + 60);

    // var_dump($_COOKIE);
    // echo $_COOKIE["usuario"];

    session_start();

    // $_SESSION["usuario"] = "Maria";
    // $_SESSION["n1"] = 10;
    // $_SESSION["n2"] = 60;

    $_SESSION["logado"] = true;
    $_SESSION["usuario"] = "José Silva";

    var_dump($_SESSION);

?>