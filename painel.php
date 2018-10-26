<?php

    session_start();

    if(!isset($_SESSION['cpf'])){
        header('Location: index.php?erro=1');
    }
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
            <h3 style="color: green; text-align: center; font-size: 50px; padding-top: 30px;">Sua pontuação:</h3>
            <h1 style="text-align: center; font-size: 60px;"><?php echo $_SESSION['pontos']; ?></h1>
            <h4 style="margin-top: 100px;">Utilize seus pontos:</h4>
            <div class="row">
                <img src="images/aetc.png" alt="" class="img-fluid" style="margin: 40px 100px 0px 85px;">
                <img src="images/saraiva.jpg" alt="" class="img-fluid" style="height: 174px; margin: 0px 70px;">
            </div>
            <div class="row">
                <p style="text-align: center; margin-left: 100px;">Recaregue seu cartão de passagem</p>
                <p style="text-align: center; margin-left: 40px; ">Compre livros com desconto</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>