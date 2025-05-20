<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos - Shopee</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    <h1>Lista de Produtos</h1>


    <?php 
    
    // $protudos = [1, 2, 4, 6, 7];
    // $protudos = [ [], [], [] ];

        $protudos = [
            ["nome" => "Celular", "preco" => 1500.987, "cat" => "elet"],
            ["nome" => "Notebook G", "preco" => 968746.6951, "cat" => "pc"],
            ["nome" => "Fone A", "preco" => 600, "cat" => "ac"],
            ["nome" => "Cadeira G", "preco" => 9.99, "cat" => "moveis"]
        ];
    
        $somaValores = 0;
        $quantidadeProdutos = count($protudos);

    ?>

    <table style="border: 1px solid black;">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço R$</th>
        </tr>

        <?php 
            foreach($protudos as $item){
        ?>
            <tr>
                <td><?=$item["nome"]?></td>
                <td><?=$item["cat"]?></td>
                <td><?=number_format($item["preco"], 2, ", ", " ")?></td>
            </tr>
        <?php } ?>

        
    </table>
    
</body>
</html>