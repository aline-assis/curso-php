<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX); //trues

//int para float
echo '<p>Int para Float</p>';
var_dump(PHP_INT_MAX + 1); 
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) +3);//melhor jeito de se converter diretamente

//float para int
echo '<p>Float para Int</p>';
var_dump((int)6.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.8));//jeito mais certo para nao perder muito valor

// //operações com String
echo '<p>Strings</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
//echo '<br>', is_string("3" + 2); é falso
echo '<br>';
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco"); //calculo só pq tem um cinco na frente
echo '<br>';
var_dump(1 + "cinco 5"); //nao calcula, só mostra 1
echo '<br>';
var_dump(1 + "2 + 5"); //só calcula 1 + 2 pq + nao é interpretado por ser dentro de uma strings
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int)"10.5");//bom jeito de converter
var_dump((float)"10.5");


?>