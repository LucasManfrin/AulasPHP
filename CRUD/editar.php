<?php 

include_once "atualizar.php";

session_start();

if (empty($_SESSION['nome'])) {
echo "<script>window.alert('Usuário não encontrado. Faça o login novamente!')</script>";
echo "<meta http-equiv='refresh' content='0; url=login.php'>";
} else {
    $dados = BuscarDados($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar">
    <div class="container-fluid">
         <a class="navbar-brand" href="#">
            <img src="./Imagens/cadastro.png" alt="Logo" width="39" height="39" class="d-inline-block align-text-top">
        </a>
    </div>
    </nav>
 
        <div class="container text-center">
            <h2 > Cadastro de Usuários </h2>

                <form action="bd.php" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <input required class="form-control" type="text" name="nome" id="nome" placeholder="Insira seu Nome">
                        </div>
                        <div class="col-md-3">
                            <input required class="form-control" type="password" name="senha" id="senha" placeholder="Digite sua senha">
                        </div>
                        <div class="col-md-6">
                            <input class=" form-control" type="text" name="email" id="email" placeholder="Insira seu Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control mt-2" type="text" name="end" id="end" placeholder="Digite seu Endereço">
                        </div>
                        <div class="col-md-2">
                            <input class="form-control mt-2" type="number" name="num" id="num" placeholder="Digite seu Número">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control mt-2" type="text" name="bairro" id="bairro" placeholder="Digite seu Bairro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input class="form-control mt-2" type="text" name="cidade" id="cidade" placeholder="Digite sua Cidade">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control mt-2" id="estado" name="estado">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control mt-2" type="number" name="cpf" id="cpf" placeholder="Digite seu Cpf">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control mt-2" type="number" name="rg" id="rg" placeholder="Digite seu Rg">
                        </div>
                        </div>
                     <div class="row">
                        <div class="col-md-12">
                            <input style="width: 50%;" class="btn btn-danger border rounded-4 form-control mt-2" type="submit" value="Enviar">
                        </div>
                     </div>
                </form>
        </div>
<footer>
    <nav class="navbar fixed-bottom">
        <div>
            Todos os direitos reservados - 2024
        </div>
    </nav>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 