<?php 
$nome = ["Joaquim", "Maria", "Manoel", "Antônio", "Serafina"];
$rg = [46447463808, 55108201754, 43267488910, 11111111111, 22222222222];
$estadocivil = ["Casado", "Solteira", "Solteiro", "Casado", "Solteiro", "Solteira"];

for ($i=0; $i < 5; $i++) { 
    echo "Nome =" . $nome[$i] . " | Rg =" . $rg[$i] . " | Estado Civil =" . $estadocivil[$i] . "</br>";
}
?>