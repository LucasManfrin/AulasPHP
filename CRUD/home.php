<?php 
    include_once "buscarusuarios.php";

    
    session_start();
    if (empty($_SESSION['nome'])) {
    echo "<script>window.alert('Usuário não encontrado. Faça o login novamente!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Entrou na página home</h1>
    <a href="sair.php">Sair</a>

    <?php 
    $dados = BuscarUsuarios();
    echo "<pre>";
        print_r($dados);
    echo "</pre>";
    ?>
    
</body>
</html>