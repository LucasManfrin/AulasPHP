<?php 
// 4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.
function lucas($n)
{
    $n1 = $n * 0.5;
    $n2 = $n * 0.05;
    echo "50% de $n é igual a $n1 <br>";
    echo "5% de $n é igual a $n2";
}
lucas(100)
?>