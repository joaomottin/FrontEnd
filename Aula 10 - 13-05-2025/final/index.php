<?php 


    // require "arquivos/login.php";
    // require "arquivos/dashboard.php";
    // ?p=login
    // ?p=dashboard
    // ?p=editar

    // var_dump($_GET);
    $url = $_GET['p'] ?? null;
    echo $url;

    require "./Controllers/HomeController.php";
    require "./Controllers/TarefasController.php";
    
    match ($url) {
    "login"        => HomeController::login(),
    "dashboard"    => TarefasController::index(),
    "fazer-login"  => HomeController::fazerLogin(),
    "add-tarefa"   => TarefasController::addTarefa(),
    "editar"       =>TarefasController::editarTarefa(),
    "apagar"       =>TarefasController::apagarTarefa(),
    default        => HomeController::index(),
    };
?>