<?php 
// 6) Ler dois valores (considere que não serão lidos valores iguais) e escrevê-los em ordem crescente.
function muza($a, $b)
{
    if ($a < $b) {
        echo "$a < $b";
    } elseif ($a > $b) {
        echo "$b < $a";
    } else {
        echo "Erro. Números iguais!";
    }
}
muza(10,2)
?>