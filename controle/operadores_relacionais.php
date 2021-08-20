<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1); //true 
var_dump(1 < 1); //false 
var_dump(1 > 1); //false
var_dump(1 >= 1);//true
var_dump(1 <= 1); //true 
var_dump(4 < 23);//true
var_dump(1 <= 7);//true
var_dump(1 != 1);//false
var_dump(1 <> 1); //false

var_dump(111 == '111');//true
var_dump(111 === '111');//false
var_dump(111 != '111');//false
var_dump(111 !== '111');//true

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 70;
if($idade < 18){
        echo "Menor de idade com $idade anos.<br>";
} elseif($idade <=65) {
        echo "Adulto com $idade anos.<br>";
}else {
        echo "Terceira idade com $idade anos.<br>";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(3 <=>5);


?>
<style>
p {
    margin-bottom: 0px;
}
hr {
    margin-top: 0px;
}
</style>