<form action="" method="POST">
    Nome: <input type="text" name ="nome">
    <input type="submit" value="Enviar">
</form>

<?php 

echo "<h3>GET<\h3>";
var_dump($_GET);

echo"<hr>";
echo"<h3>POST<\h3>";
var_dump($_POST);

echo"<h3>REQUEST<\h3>";
var_dump($_REQUEST);


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    echo"<hr>";
    echo ("Recebido via POST");
}else if ($_SERVER["REQUEST_METHOD"] === "GET"){
    echo"<hr>";
    echo ("Recebido via GET");
} else {echo"<hr>"; echo "nada";}

?>
