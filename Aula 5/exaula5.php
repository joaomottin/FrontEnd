<?php 
include_once "funcoes.php";
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $produto = $_POST["produto"]??null;
    $preco = $_POST["preco"]??null;
    $quantidade = $_POST["quantidade"]??null;

    if(varValida($produto)&&varValida($preco)&&varValida($quantidade)){
        $info = calculaEFormataEstoque($produto, $preco, $quantidade);
        
        include "infoProduto.php";

        //echo "<pre>";
        //var_dump($info);
        //echo "<pre>";

        //echo "<br>Produto: $produto";
        //echo "<br>Produto: $produto";
        //echo "<br>Preço: $preco";

        //echo "<br>Nome: ".$info["nome"];
        //echo "<br>Preço: ".$info["preco"];
        //echo "<br>Quantidade:".$info["quantidade"]; 
        //echo "<br>Total em Estoque: R$".$info["total"]; 
    } else {echo "Algo em branco";}

} else { 
    //echo "<h3>Tem nada aqui não carai</h3>";
    include "formulario.php"
}
?>