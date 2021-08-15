<div class="titulo">Desafio String</div>

<?php
echo ("Qual o metodo que a posição do texto 'abc' na string '!Abcabc' retorne 1?");
echo '<br>';

echo strpos('!Abcabc', 'abc') . '<br>';
echo stripos('!Abcabc', 'abc') , '<br>';
echo strpos(strtolower('!Abcabc'), 'abc');
?>