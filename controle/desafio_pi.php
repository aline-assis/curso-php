<div class="titulo">Desafio Pi</div>

<?php
$pi = 3.14;
//$pi = pi();
$diferença = pi() - $pi; 
$piErrado = 2.8;
echo $pi;

if($pi + $diferença === pi()) {
    echo"<br>Igual";
} Else{
    echo"Diferente";
}

//Resposta professor
echo "<br>" . ($pi - pi());
echo "<br>" . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais';
} else {
    echo "<br>Valor errado!";
}

if($pi - $piErrado <= 0.01) {
    echo "<br>Praticamente iguais";
} else {
    echo "<br>Valor errado";
}

?>