<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos - Shopee</title>
</head>
<body>


<h1> Lista de Produtos</h1>

    <?php

    //$produtos = [1,2,3,4];
    //$produtos = [[], [], [], []];

    $produtos = [
        ["nome"=> "Celular", "preco" => 1499.99, "cat" => "elet"],
        ["nome"=> "Notebook", "preco" => 3500, "cat" => "pc"],
        ["nome"=> "Fone HyperX", "preco" => 749.99, "cat" => "ac"],
        ["nome"=> "Cadeira Gamer", "preco" => 99.99, "cat" => "mov"]
    ];

    $somaValores=0;
    $quantidadeProdutos=count($produtos);

    ?>

    <table style="border:1px solid black;">
        <tr>
            <td>Nome</td>
            <td>Categoria</td>
            <td>Preço</td>
        </tr>
    

    <?php  
        foreach($produtos as $item){
    ?>
        <tr>
            <td><?=$item["nome"]?></td>
            <td><?=$item["cat"]?></td>
            <td><?=number_format($item["preco"],2,", ", "")?></td>
        </tr>

    <?php 
        }
    ?>

</table>

    
</body>
</html>