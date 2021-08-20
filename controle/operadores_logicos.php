<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p>";
var_dump(true);
var_dump(!true); //operador negação "not"
var_dump(!!true); 

echo "<p class='divisao'>Tabelas Verdade 'AND' (E)</p><hr>";
var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND false);	
var_dump(false AND true);
var_dump(true AND 3 > 2 AND 7 <= 7 AND 3 === '3');

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true OR true);
var_dump(true OR false);
var_dump(false OR false);
var_dump(false OR true);

echo "<p class='divisao'>Tabela Verdade 'XOR' (UM OU OUTRO)</p><hr>";
var_dump(true XOR true);
var_dump(true XOR false);
var_dump(false XOR false);
var_dump(false XOR true);

echo "<p class='divisao'>Exemplo</p><hr>";

$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomem = ($idade >=65 AND $sexo === 'M');
$criterioMulher =($idade >= 60 AND $sexo === 'F');
$atingiuCriterio = $criterioHomem XOR $criterioMulher;
$podeAposentar = $pagouPrevidencia AND $atingiuCriterio;
echo "Pode se aposentar -> $podeAposentar.<br>";

if($idade >= 60 AND $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif($idade >= 65 AND $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco...";
}



?>
