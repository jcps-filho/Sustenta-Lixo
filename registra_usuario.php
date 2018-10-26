<?php

    require_once('db.class.php');

    $nome =  $_POST['nome'];
    
    $email = $_POST['email'];

    $cpf = $_POST['cpf'];
    
    $senha = $_POST['senha'];

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "INSERT INTO usuarios (nome, email, cpf, senha) values ('$nome', '$email', '$cpf', '$senha');";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png">
    <title>Sustenta Lixo</title>
</head>
<body>
    <div class="col-md-6 fundo">
        <div class="container">
            <h1 class="titulo">Sustenta Lixo</h1>
            <div class="row">
                <?php
                    //executar a query
                    if(mysqli_query($link, $sql)){
                        echo '<span style="font-size: 20px;">Usuário registrado com sucesso!</span>';
                    } else {
                        echo '<span style="font-size: 20px;">Erro ao registrar o usuário!</span>';
                    }
                ?>
                <br>
                <a href="index.php" class="btn btn-success btn-lg">Acessar Painel</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>