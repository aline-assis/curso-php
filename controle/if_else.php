<div class="titulo">If Else</div>

<?php if (true) { 
 echo "Serei impresso?<br>";
}
 if(false) {
     echo "Verdadeiro - Parte A <br>";
     echo "Verdadeiro - Parte B <br>";
 } else {
     echo "Falso - Parte A <br>";
     echo "Falso - Parte B <br>";
 }

if(false) {
     echo "Passo A<br>";
 } else if(false) {
     echo "Passo B<br>";
 } elseif(false) {
     echo "Passo C<br>";
 } elseif(true) {
     echo "Passo D<br>";
 } else {
     echo "Último Passo<br>";
 }
 echo "Fim<br>";
    
?>