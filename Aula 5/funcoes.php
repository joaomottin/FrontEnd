<?php

function varValida($var){
    return !is_null($var) && !empty($var);
}

function calculaEFormataEstoque(string $nome, float $preco, float $quantidade){
    $total = $preco * $quantidade;

    //$infoProduto["total"] = $total;
    $infoProduto["total"] = number_format ($total, 2, ",", ".");
    $infoProduto["nome"] = ucwords($nome);
    $infoProduto["preco"] = number_format ($preco, 2, ",", ".");
    $infoProduto["quantidade"] = number_format ($quantidade, 0, ",", ".");
    return $infoProduto;
}


?>