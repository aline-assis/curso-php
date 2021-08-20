<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button class="choice">Executar</button>
</form>

<?php
echo "<script>console.log('executando')</script>";
 $t1 = $_POST['t1'] === '1';
 $t2 = $_POST['t2'] === '1';
 //$workedBoth = $t1 AND $t2 == TRUE;
//  $workedBoth = 0;
//  if ($t1 && $t2){
//      $workedBoth = 1;
//  }
//  $workedOne = 0; 
//  if ($t1 XOR $t2) {
//      $workedOne = 1;
//  }
 //$workedNone = $t1 AND $t2 == false; 
//  $workedNone = 0;
//  if(!$t1 && !$t2) {
//      $workedNone = 1;
 //}
 $workedBoth = $t1 && $t2 ? 1 : 0;
 $workedOne = $t1 || $t2 ?  1 : 0;
 $workedNone = !$t1 && !$t2 ? 1 : 0;
 echo "<script>console.log('$workedBoth WorkedBoth')</script>";
 echo "<script>console.log('$workedOne WorkedOne')</script>";
 echo "<script>console.log('$workedNone WorkedNone')</script>";
 $spendAllMoney = $workedBoth;
 $spendSomeMoney  = $workedOne;
 $noSpendMoney = $workedNone;

 if ($workedBoth == TRUE){
     echo "Vamos comprar uma TV de 50 e sorvete";
 }elseif($workedOne == TRUE){
     echo "Vamos comprar uma TV de 30 e sorvete";
 }else{
     echo "Sem TV e sem sorvete";
 }


//if(isset($_POST['t1']) && isset($_POST['t2'])) {
    // $t1 = $_POST['t1'] === '1';
    // $t2 = !!$_POST['t2'];
    // $tv = '';
    // $sorvete = false;

    // if($t1 && $t2) {
    //     $tv = '50"';
    // } elseif($t1 xor $t2) {
    //     $tv = '32"';
    // }

    // if($t1 or $t2) {
    //     $sorvete = true;
    // }

    // if($tv) {
    // $resultado = "Vamos comprar uma TV de $tv";
    // } else {
    //     $resultado = "Sem TV dessa vez :(";
    // }

    // $saudavel = !$sorvete;

    // if($saudavel) {
    //     $resultado .= '<br>Estamos mais saudáveis!';
    // } else {
    //     $resultado .= '<br>Sorvete liberado \o/';
    // }

    // echo "<p>$resultado</p>";
//}