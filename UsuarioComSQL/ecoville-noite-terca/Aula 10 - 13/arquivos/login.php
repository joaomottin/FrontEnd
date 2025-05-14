<form action="" method="post">
    Usuario: <input type="text" name="usuario">    
    Senha: <input type="password" name="senha">
    <input type="submit" value="Login">
</form>

<?php

    session_start();
    
    $usuario_formulario = $_POST['usuario'] ?? null;
    $senha_formulario = $_POST['senha'] ?? null;

    if(is_null($usuario_formulario) || is_null($senha_formulario)){
        echo "Fazer Login...";
    }else{
        
        require "banco.php";
        
        if(fazerLogin($usuario_formulario, $senha_formulario)){
            echo "Sucesso!";
            header("Location: dashboard.php");
        }else{
            echo "Erro X.x";
        }
        
    }



?>
