<?php 
/* 4) Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um algoritmo que 
calcule seu peso ideal, utilizando as seguintes fórmulas:  
Para homens: (72.7*h) - 58  Para mulheres: (62.1*h) - 44.7  (h = altura) */
function calc($altura, $sexo)
{
    if ($sexo == "feminino") {
        $pesoideal = ($altura * 62.1) - 44.7;
        echo "Seu peso ideal é $pesoideal";
    } else {
        $pesoideal = ($altura * 72.7) - 58;
        echo "Seu peso ideal é $pesoideal";
    }
}
calc(1.7, "masculino")
?>