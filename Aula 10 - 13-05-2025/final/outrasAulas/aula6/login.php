<form action="" method="post">
    Usuario: <input type="text" name="usuario">
    Senha: <input type="password" name="senha">
    <input type="submit" value="Fazer Login">
</form>

<?php

    session_start();
    $usuario = $_SESSION["usuario"] ?? null;
    
    if(!is_null($usuario)){
        header("Location: dashboard.php");
    }


    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    if(!is_null($usuario) && !is_null($senha)){
        echo " -- fazendo login -- ";

        if($usuario === "admin" && $senha === "123"){
            echo "<h3>bem vindo $usuario</h3>";    
           
            $_SESSION["usuario"] = $usuario;
            header("Location: dashboard.php");
        }else{
            echo "<h3>algo errado</h3>";
        }

    }else{
        echo "<h3>Fazer Login</h3>";
    }


?>