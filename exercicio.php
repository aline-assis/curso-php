<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
     <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização dos Exercícios</h2>

       
    </header> 
    <nav class="navegacao">
            <a href="teste.php" class="rosa-forte"> None <a>
            <a href="index.php" class="rosa-forte"> Back <a>
            </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                      include($_GET['dir'] . "teste.php");
            ?>
            </div>
    </main>
    <footer class="rodape">
        COD3R & Aline Assis © <?= date('Y'); ?>
    </footer>

</body>
</html>