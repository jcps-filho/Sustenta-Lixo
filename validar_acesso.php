<?php

    session_start();

    require_once('db.class.php');

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha';";
    
    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if(isset($dados_usuario['cpf'])){
            $_SESSION['cpf'] = $dados_usuario['cpf'];
            $_SESSION['senha'] = $dados_usuario['senha'];
            $_SESSION['pontos'] = $dados_usuario['pontos'];
            header('Location: painel.php');
        } else {
            header('Location: index.php?erro=1');
        }
    } else {
        echo 'Erro na execução da da consulta, favor contato com o administrador do site.';
    }

?>