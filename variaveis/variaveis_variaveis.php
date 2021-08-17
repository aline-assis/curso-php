<div class="titulo">Variáveis Variáveis</div>

<?php 
echo "<p>Cada $ pega o valor da proxima variavel</p>";
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita';
echo "$epa {$$epa} {$$$epa}";


?>