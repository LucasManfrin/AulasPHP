<?php 
/* 6 - Crie um algoritmo para jogar par ou ímpar, na qual o jogador escolhe par ou ímpar e depois colocar 
o valor desejado. O computador precisa selecionar o seu valor e verificar o resultado, além de mostrar o vencedor. */

function renan($n1,$escolha)
{
    $n2 = rand(0,100);
    $n3 = $n1 + $n2;

    if ($n3 % 2 == 0 AND $escolha == "par") {
        echo "Número escolhido = $n1. <br>";
        echo "Número escolhido pelo computador = $n2. <br>";
        echo "O número é par! Você ganhou! :)";

    }  elseif ($n3 % 2 == 0 AND $escolha == "ímpar") {
        echo "Número escolhido = $n1. <br>";
        echo "Número escolhido pelo computador = $n2. <br>";
        echo "O número é par! Você perdeu! :(";     
    }
         else  {
        echo "Número escolhido = $n1. <br>";
        echo "Número escolhido pelo computador = $n2. <br>";
        echo "O número é ímpar! Você ganhou! :)";
    }
}
renan(1,"par")
?>