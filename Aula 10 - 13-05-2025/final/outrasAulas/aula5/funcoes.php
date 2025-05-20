<?php
    // var_dump($_POST);
    function varValida($var) {
        return !is_null($var) && !empty($var);
    }
    
    function calculaEFormataEstoque(string $nome, float $preco, float $quant) {
        $total = $preco * $quant;

        // $infoProduto["total"] = $total;
        $infoProduto["total"] = number_format($total, 2, ", ", ".");
        $infoProduto["preco"] = number_format($preco, 2, ", ", ".");
        $infoProduto["quantidade"] = number_format($quant, 0, ", ", ".");
        $infoProduto["nome"] = ucwords($nome);

        return $infoProduto;
    }
