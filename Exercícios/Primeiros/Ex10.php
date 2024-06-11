<?php 
// Ler dois valores (não pode ser lidos valores iguais) e escreva o maior deles.

function comp($a, $b)
{
    if ($a == $b) {
        echo "Erro! Valores iguais.";
    } elseif ($a > $b) {
        echo "$a é maior do que $b.";
    } else {
        echo "$b é maior do que $a.";
    }
}
comp(2,-123)
?>