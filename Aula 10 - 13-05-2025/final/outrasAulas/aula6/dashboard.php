<?php

    session_start();

    $usuario = $_SESSION["usuario"] ?? null;

    if(!is_null($usuario)){
        echo "<h3>Bem Vindo $usuario</h3>";
    }else{
        //echo "<h3>erro - fazer login</h3>";
        header("Location: login.php");
    }


?>

<h3>SITE SUPER SEGURO</h3>
<form action="" method="post">
    Item: <input type="text" name="item">
    <input type="submit" value="Salvar">
</form>

<?php

    $item = $_POST["item"] ?? null;

    if(!is_null($item)){   
        $_SESSION["compras"][] = $item;
    }


    echo "<h4>LISTA DE COMPRAS</h4>";

    $lista = $_SESSION["compras"] ?? null;
    // var_dump($lista);
    foreach ($lista as $key => $value) {
        echo "<br> $key - $value";
    }


?>