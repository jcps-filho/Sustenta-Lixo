<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

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
    <link rel="icon" href="images/favicon.png">
    <title>Sustenta Lixo</title>

</head>
<body>
    <div class="col-md-6 fundo">
        <div class="container">
            <h1 class="titulo">Sustenta Lixo</h1>
            <div class="row">
                <div class="col-md-6 formulario">
                    <h3 style="text-align: center; margin-bottom: 25px;">Acessar painel</h3>
                    <form method="post" action="validar_acesso.php" id="formLogin">
                        <div class="form-group" action="">
                            <span class="fas fa-user"></span><label for="cpf" style="margin: 0px 5px;"><h5>CPF (Apenas números):</h5></label>
                            <input type="text" class="form-control" id="cpf" name="cpf" required>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-key"></span><label for="senha" style="margin: 0px 5px;"><h5>Senha:</h5></label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <span style="display: block; text-align: center; margin-bottom: 15px;"><?php
                            if($erro == 1) {
                                echo "CPF e/ou senha errado(s)";
                            }
                        ?></span>
                        <button type="submit" class="btn btn-outline-success btn-lg btn-block" style="margin-bottom: 15px;" id="btn_login">Entrar</button>
                        <a href="cadastro.php" class="btn btn-success btn-lg btn-block">Cadastrar-se</a>
                    </form>
                    <a href="recuperar.php" style="color: green; text-align: center; display:block;">Esqueceu sua senha?</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>