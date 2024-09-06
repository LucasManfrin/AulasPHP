<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <img class="mt-2" src="./Imagens/cadastro.png" alt="Logo" width="50" height="50">
        <h1 >Faça seu Login!</h1>
        <form class="form-control bg-secondary" action="buscar.php" method="post">
            
            <div class="row">
                <div class="col-md-12">
                    <input required placeholder="Insira seu email" class="form-control mt-2" type="email" name="email" id="email">
                </div>
                <div class="col-md-12">
                    <input required placeholder="Insira seu nome" class="form-control mt-2" type="text" name="nome" id="nome">
                </div>
                <div class="col-md-12">
                    <input required placeholder="Insira sua senha" class="form-control mt-2" type="password" name="senha" id="senha">
                </div>
                <div class="col-md-12">
                    <input class="form-control btn btn-success mt-2" type="button" value="Entrar">
                </div>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>