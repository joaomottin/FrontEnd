<?php 
include 'dados.php';

$busca = $_GET['busca'] ?? '';
$itensFiltrados = [];

foreach ($receitas as $receita) {
    if (stripos($receita['nome'], $busca) !== false || stripos($receita['tipo'], $busca) !== false) {
        $itensFiltrados[] = $receita;
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Resultados da Busca</title>
</head>
<body>
    <h1>Resultados da Busca</h1>

    <?php if (empty($itensFiltrados)): ?>
        <p>Nenhuma receita encontrada.</p>
    <?php else: ?>
        <div class="container">
            <?php foreach ($itensFiltrados as $receita): ?>
                <div class="receita">
                    <img src="<?= $receita['imagem']; ?>" alt="<?= $receita['nome']; ?>">
                    <h2><?= $receita['nome']; ?></h2>
                    <p><strong>Tipo:</strong> <?= $receita['tipo']; ?></p>
                    <a href="detalhes.php?id=<?= $receita['id']; ?>">Ver Mais</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <a href="index.php">Voltar ao Catálogo</a>
</body>
</html>
