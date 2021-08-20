<div class="titulo">Operador Ternário</div>

<?php
$idade = 15;
$maiorIdade = $idade >= 18 ? 1 : 0;
if ($maiorIdade == 0) {

}
echo "$maiorIdade<br>";
if ($maiorIdade == True) {
    echo"Maior de idade com $idade";
}else {
    $faltam = 18 - $idade;
    echo "Ainda nao é maior de idade, faltam $faltam anos<br>";
}

$idadeAula = 70;
$status;

if($idadeAula >= 18) {
    $status = 'Maior de idade';
}else {
    $status = 'Menor de idade';	
}   

echo "$status<br>";

$idadeAula = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status";


?>
