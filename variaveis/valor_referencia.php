<div class="titulo">Valor vs Referencia</div>

<?php 
echo "<p>Atribuição por Valor</p>";
$variavel = 'valor inicial';
$variavelValor = $variavel;
echo "$variavelValor $variavel";
$variavelValor = 'novo valor';
echo "<br>$variavel $variavelValor";
echo "<br>";

echo "<p>Atribuição por Referencia</p>";
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo "$variavelReferencia $variavel";




?>