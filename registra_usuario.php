<?php

    require_once('db.class.php');

    $nome =  $_POST['nome'];
    
    $email = $_POST['email'];

    $cpf = $_POST['cpf'];
    
    $senha = $_POST['senha'];

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "INSERT INTO usuarios (nome, email, cpf, senha) values ('$nome', '$email', '$cpf', '$senha');";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo 'Usuário registrado com sucesso!';
    } else {
        echo 'Erro ao registrar o usuário!';
    }

?>