<?php 

print_r($_POST);
echo "<br>" . $_POST['nome'];



/* CONEXÃO COM O BANCO DE DADOS */
$pdo = new PDO('mysql:host=localhost;dbname=bdaula', 'root', '');

/* PREPARAÇÃO PARA REALIZAR UM COMANDO SQL NO BANCO DE DADOS */
$sql = $pdo->prepare("INSERT INTO `cadastro` VALUES (null,?,?,?,?,?,?,?,?,?,?)");

/* ENVIO DOS DADOS E GRAVAÇÃO NO BANCO DE DADOS */
$sql ->execute(array($_POST['nome'], 
                     $_POST['email'], 
                     $_POST['end'],
                     $_POST['num'],
                     $_POST['bairro'],
                     $_POST['cidade'],
                     $_POST['estado'],
                     $_POST['cpf'],
                     $_POST['rg'],
                     date("Y-m-d H:i:s")
));
?>