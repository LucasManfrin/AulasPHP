<?php 
// Criação de um vetor de números inteiros
$vetNumeros = [1,2,3,4,5];
/* print_r($vetNumeros); */

// Vetor de Nomes
$vetNomes = ["Joaquim", "Maria", "Manoel", "Diego"];

// Vetor de Idades
$vetIdades = [50, 35, 78, 45];

// Vetor misturado 
$vetMix = [15, "Caneta", 35.00, true, $vetNumeros];

// Somar todos os valores do vetor
$vetSoma = array_sum($vetNomes);

// Encontrar maior valor de um vetor
$maior = max($vetNumeros);

// Blibliotecas
$vetBibliotecas = [ 
    'nome' => 'Joaquim',
    'idade' => 35,
    'end' => "Ruas De São Paulo",
    'bairro' => 'Jardim Brasil'
];

// Exibir na tela um vetor
/* echo 'Nome = ' . $vetBibliotecas['nome'] . ' Idade = ' . $vetBibliotecas['idade']; */

// Cadastro de Usuários
$cadastroVetor = [
    "nome" => "Lucas",
    "senha" => "12345",
    "end" => "Rua Padre João",
    "bairro" => "Santa Teresa",
    "num" => "17-30"
];
print_r($cadastroVetor);

$vetorCadastro = ["Lucas", 12345, "Rua Padre João", "Santa Teresa", "17-30"];
print_r($vetorCadastro);
?>