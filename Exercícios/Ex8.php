<?php 
/* 3) Construa um um algoritmo para ler uma variável numérica N e imprimi-la somente se a mesma 
for maior que 100, caso contrário imprimir com o valor zero. */

function lucas($N)
{
    if ($N > 100) {
        echo "O valor é $N";
    } else {
        echo "0";
    }
}
lucas(100)
?>