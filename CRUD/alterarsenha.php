<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar senha</title>
</head>
<body>
<?php
    require 'funcoes.php';

    

    $atual = $_POST['atual'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $emailatual = $_SESSION['email'];
    
    if ($atual == null || $senha == null) {
        require 'alterarsenha-form.php';
    } else {
        $busca = $banco->query("SELECT id_usuario, nome_usuario, email, senha, tipo FROM usuario WHERE email = '$emailatual'");
    
        if (!$busca) {
            require 'alterarsenha-form.php';
            echo "<div class='containerCU'>Erro ao acessar o banco</div>";
        } else {
            $objAtual = $busca->fetch_object();
    
            if ($objAtual == null) {
                require 'alterarsenha-form.php';
                echo "<div class='containerCU'>Usuário não encontrado</div>";
            } else {
                if (password_verify($atual, $objAtual->senha)) {
                    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
                    $query = "UPDATE usuario SET senha = '$senhaCriptografada' WHERE email = '$emailatual'";
                    $banco->query($query);
                    echo "<div class='containerCU'><h4>Senha alterada com sucesso</h4><br>";
                    echo "<h4>Para sua segurança, você foi desconectado. Realize o login novamente.</h4><br>";
                    echo "<h4 class='volta'><a href='logout.php'>Voltar para tela inicial</a></h4></div>";
                } else {
                    require 'alterarsenha-form.php';
                    echo "<div class='containerCU'>Senha atual incorreta</div>";
                }
            }
        }
    }
    ?>
    









    
</body>
</html>