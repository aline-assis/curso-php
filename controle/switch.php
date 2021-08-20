<div class="titulo">Switch</div>

<?php
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
        $carro = 'Renegate';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobile';
        $preco = 30000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";

?>