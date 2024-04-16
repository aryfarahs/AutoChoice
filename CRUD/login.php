<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
    
        $busca = $banco->query("Select id_usuario, nome_usuario, email, senha, tipo from usuario where email = '$email'");

        if (!$busca) {
            echo 'Erro ao acessar o banco';
            require 'login-form.php';
        } else {


            $objAtual = $busca->fetch_object();


            if ($objAtual == null) {

                echo "Usuário não encontrado";
                require 'login-form.php';
            } else {
                if (!($senha === $objAtual->senha)) {
                    echo 'Senha errada';
                    require 'login-form.php';
                } else {
                    $_SESSION['usuario'] = $objAtual->nome_usuario;
                    // $_SESSION['nome'] = $objAtual->nome_usuario;
                    $_SESSION['email'] = $objAtual->email;
                    $_SESSION['tipo'] = $objAtual->tipo;
                    echo 'Logado com sucesso';
                    header("Location: index.php");
                }
            }
        }
    }

    ?>








</body>
</html>