<?php
    session_start();

    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
    unset($_SESSION['pontos']);

    header('Location: index.php');
?>