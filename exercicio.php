<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
     <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
 </header> 
    <nav class="navegacao">
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
     class="rosa-forte"> None <a>
            <a href="index.php" class="rosa-forte"> Back <a>
            </nav>
    <main class="principal">
        <div class="conteudo">
        <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
            </div>
    </main>
    <footer class="rodape">
    COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>

</body>
</html>