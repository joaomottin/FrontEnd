<h1> FAZER LOGIN </h1>

<form action="" method="post">
    Usuario: <input type="text" name="Usuario">
    Senha: <input type="password" name="Senha">
    <input type="submit" value="Fazer login">
</form>

<?php
    session_start();
    $usuario = $_SESSION["Usuario"]??null;
    if(!is_null($usuario)){
        header("dashboard.php");
    }

    $usuario = $_POST["Usuario"] ?? null;
    $senha = $_POST["Senha"] ?? null;


//setcookie("usuario", "joao", time() + 3600);
//var_dump($_COOKIE);
//echo $_COOKIE["usuario"];
//session_start();
//$_SESSION["Usuario"] = "Maria"; //Preenche um array //(Usuario) com sua variável (Maria).
//$_SESSION["n1"] = 10; 
//$_SESSION["n2"] = 20; 
//$_SESSION["Logado"]=true;
//$_SESSION["Usuario"]= "José Silva";
//var_dump($_SESSION);
?>