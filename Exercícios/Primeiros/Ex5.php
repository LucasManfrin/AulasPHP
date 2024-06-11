<?php 
/*  5 - Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados 
e mostre o resultado. */
function quadrado($n1, $n2)
{
    $n3 = $n1**2;
    $n4 = $n2**2;
    $soma = $n3 + $n4;
    echo "O resultado da soma de $n1 ao quadrado e $n2 ao quadrado é igual a $soma";

}

quadrado(4,2)
?>