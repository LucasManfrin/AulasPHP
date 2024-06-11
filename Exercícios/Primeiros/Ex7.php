<?php 
/* 1) Elabore um algoritmo que leia um número. Se positivo armazene-o em A, se for negativo, em B. 
No final mostrar o resultado. */

function armazem($n)
{
    if ($n < 0) {
        $A = $n;
        echo "O número $A é negativo";
    } elseif ($n > 0) {
        $B = $n;
        echo "O número $B é positivo";
    } else {
        echo "O número é $n";
    }
}
armazem(-1)
?>