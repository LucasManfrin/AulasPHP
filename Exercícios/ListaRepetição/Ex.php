<?php 
// 1 -  Crie um loop que imprima os números de 1 a 10.
echo " 1 -  Crie um loop que imprima os números de 1 a 10. </br>";
for ($i=0; $i <= 10 ; $i++) { 
    echo "$i </br>";
}
echo " </br>";
echo " </br>";
echo " </br>";

// 2 - Crie um loop que imprima os números pares de 1 a 10.
echo "2 - Crie um loop que imprima os números pares de 1 a 10.</br>";

for ($i=0; $i <= 10 ; $i += 2) { 
    echo "$i </br>";
}
echo " </br>";
echo " </br>";
echo " </br>";

// 3 - Crie um loop que imprima os números ímpares de 1 a 10.
echo " 3 - Crie um loop que imprima os números ímpares de 1 a 10.</br>";
for ($i=1; $i <= 10 ; $i += 2) { 
    echo "$i </br>";
}
echo " </br>";
echo " </br>";
echo " </br>";

// 4 - Crie um loop que imprima os números de 1 a 100, pulando de 2 em 2.
echo "4 - Crie um loop que imprima os números de 1 a 100, pulando de 2 em 2. </br>";
for ($i=1; $i <= 100 ; $i += 2) { 
    echo "$i | ";
}
echo " </br>";
echo " </br>";
echo " </br>";

// 5 - Crie um loop que imprima os números de 100 a 1, pulando de 2 em 2.
echo "5 - Crie um loop que imprima os números de 100 a 1, pulando de 2 em 2. </br>";
for ($i=100; $i >= 1; $i-= 2) { 
    echo "$i | ";
}
?>