<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//Concatenação
echo ("Nós também" . ' somos'. '<br>');
echo("Numero é " . 123); 
echo '<br>', "Também aceito", " virgulas";
echo '<br>';
echo "'Teste" . '"Teste';
print("<br>Também exite a função print");
print "<br>Também existe a função print";

//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "UTF-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); //parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
echo '<br>' . strchr("Hello world!","world");
?>