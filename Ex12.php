<?php 
/* Calcular e informar o usuário a sua média bem como a situação em relação a aprovação:
Média maior ou igual a 6 é aprovado, maior que 3 recuperação e menor que 3 reprovado. */

    $n1 = rand(0,10);
    $n2 = rand(0,10);
    $n3 = rand(0,10);
    $n4 = rand(0,10);
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
 
    echo"<h1>Boletim Escolar</h1>";
 
    if (isset($n1) && isset($n2) && isset($n3) && isset($n4)){
    if ($media < 3) {
        echo "Média: $media, reprovado!<br>";
    } else if ($media >= 6) {
        echo "Média: $media, aprovado<br>";
    } else {
        echo "Média: $media, recuperação";
    }
} else {
    echo "Campos obrigatórios não preenchidos";
}
?>
