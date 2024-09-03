<?php 
// Estruturas de Repetição

$a = 15;
$count = 0;

// Estrutura WHILE
echo "Utilizando o WHILE: </br>";

while ($count <= 10) {
    echo "Contador =$count </br>";
    $count++;
}

// Estrutura FOR
echo "Utilizando o FOR: </br>";
$cores = ['azul', 'amarelo', 'verde', 'rosa', 'vermelho'];

for ($i=0; $i < 5; $i++) { 
    echo "Cores = " . $cores[$i] . "</br>";
}

// Estrutura FOREACH
$coress = [ 
    'cor1' => 'vermelho',
    'cor2' => 'azul',
    'cor3' => 'rosa'
];

echo "Utilizando o FOREACH: </br>";
foreach ($coress as $key => $value) {
    echo "Chave = $key | Valor = $value </br>";
}
?>