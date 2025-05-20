<?php

   require_once "funcoes.php";


    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $produto = $_POST["produto"] ?? null;
        $preco = $_POST["preco"] ?? null;
        $quantidade = $_POST["quantidade"] ?? null;

        if(varValida($produto) && varValida($preco) && varValida($quantidade)){
            
            $info = calculaEFormataEstoque($produto, $preco, $quantidade);
            include "infoProduto.php";
          
        }else{
            echo "... algo em branco ...";
            include "formulario.php";
        }
        
        
    } else{
        // echo "<h3>opa... erro O.o  </h3>";
        include "formulario.php";
    }


?>