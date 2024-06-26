<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <?php
    require 'funcoes.php';
    ?>

<?php

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$nome = $_POST['nome'] ?? null;

if ($email == null || $senha == null) {
    require 'login-form.php';
} else {
    $busca = $banco->query("SELECT id_usuario, nome_usuario, email, senha, tipo FROM usuario WHERE email = '$email'");

    if (!$busca) {
        require 'login-form.php';
        echo "<div class='containerCU'>Erro ao acessar o banco</div>";
    } else {
        $objAtual = $busca->fetch_object();

        if ($objAtual == null) {
            require 'login-form.php';
            echo "<div class='containerCU'>Usuário não encontrado</div>";
        } else {
            if (password_verify($senha, $objAtual->senha)) {
                $_SESSION['usuario'] = $objAtual->nome_usuario;
                $_SESSION['email'] = $objAtual->email;
                $_SESSION['tipo'] = $objAtual->tipo;
                echo "<div class='containerCU'>Logado com sucesso";
                header("Location: index.php");
            } else {
                require 'login-form.php';
                echo "<div class='containerCU'>Senha incorreta</div>";
            }
        }
    }
}
?>


</body>
</html>