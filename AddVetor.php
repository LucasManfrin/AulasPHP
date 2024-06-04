<?php
 /*Pego o valor enviado pel HTML e guarda na variavel cor  */
 $cor = $_POST ['cores'];
 $cor1 = $_POST['cores1'];
 $cor2 = $_POST['cores2'];
 
 /*  criação do vetor vazio  */
 $vetcores = [];
 
/*use a função array_push para adicionar valores no vetor  */
 array_push($vetcores, $cor, $cor1, $cor2);
 
 /*  exibe os valores armazenados no vetor vetcores*/
 print_r($vetcores);
 echo "</br>";
 array_pop($vetcores);
 print_r($vetcores);
 
 

?>

 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio de vetores</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite uma cor:</label>
        <input type="text" name="cores" id="">
        
        <label for="">Digite outra cor:</label>
        <input type="text" name="cores1" id="">

        <label for="">Digite mais uma cor:</label>
        <input type="text" name="cores2" id="">

        <input type="submit" value="Cadastrar cor">
    </form>
</body>
</html>