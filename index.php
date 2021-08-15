<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
     <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de exercício</h2>
    </header> 
    <main class="principal">
        <div class="counteudo">
            <nav class="modulos">
                <div class="modulo rosa-forte">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio PHP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo rosa-forte">
                    <h3>Módulo 02</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=aritmeticas">
                                Operações Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=desafio_precedencia">
                                Desafio Precedencia
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=boolean">
                                Tipo Boolean
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipo&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & Aline Assis © <?= date('Y'); ?>
    </footer>

</body>
</html>