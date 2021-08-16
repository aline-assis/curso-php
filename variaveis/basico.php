<div class="titulo">Basico</div>

<?php
$numero = 13;
echo $numero, '<br>';
var_dump($numero);

echo '<br>';
$a = 3;
$b = 13;
$soma = $a + $b;
echo $soma, '<br>';

echo isset($soma); 
unset($soma);
echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;
$variavel = "Agora sou uma String";
echo '<br>' . $variavel;

//Nomes de variaveis
echo '<p>Nome de variaveis</p>';
echo $var = 'valida';
$var1 = 'valida';
$VAR2 = 'valida';
$_var_4 = 'valida';
$vár5 = 'valida'; //evitar
//$6var = 'invalida';
//$%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>' . '<p>Variaveis pré-definidas</p>';
var_dump($_SERVER["HTTP_HOST"]);
?>