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
    
    if($url == "login"){
        HomeController::login();
    }
    else if($url == "fazer-login"){
        HomeController::fazerLogin();
    }
    else if ($url == "dashboard") {
        TarefasController::index();
    }
    else{
        HomeController::index();
    }





    

?>