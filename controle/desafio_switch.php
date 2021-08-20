<div class="titulo">Desafio Switch</div>

<form action="#" method = "post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metros > KM</option>
        <option value="km-metro">KM > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button class="choice">Calcular</button>
</form>

<?php
// echo $_POST['param'] . " ";
// echo $_POST['conversao'];
const FATOR_KM_MILHA = 1.609;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAL = 1.8;
$param1 = $_POST['param'];
$conversao;
switch ($_POST['conversao']) {
    case 'km-milha':
        $conversao = $param1 / FATOR_KM_MILHA;
        break;
    case 'milha-km':
        $conversao = $param1 * FATOR_KM_MILHA;
        break;
    case 'metro-km':
        $conversao = $param1 / FATOR_METRO_KM;
        break;
    case 'km-metro':
        $conversao = $param1 * FATOR_KM_MILHA;
        break;
    case 'cel-fah':
        $conversao = $param1 * FATOR_CEL_FAL + 32;
        break;
    case 'fah-cel':
        $conversao = ($param1 - 32) / FATOR_CEL_FAL;
        break;
    default:
        echo "Nenhum valor calculado";
}
echo $conversao . " " . $_POST['conversao'];


?>