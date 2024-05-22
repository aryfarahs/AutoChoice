<!DOCTYPE html>
<html lang="pt-brb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
 
<?php

require 'funcoes.php';

    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $nome = $_POST['nome'] ?? null;

if ($email == null || $senha == null || $nome == null) {
    require 'cadastro-form.php';
} else {
    if(($banco->query("SELECT id_usuario, nome_usuario, email, senha, tipo FROM usuario WHERE email = '$email'")->num_rows) == 0){
        
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO usuario (nome_usuario, email, senha, tipo) VALUES ('$nome', '$email', '$senhaCriptografada', 'normal');";
    
        $banco->query($query);
        // Validação poderia ser feita aqui
        require 'login-form.php';
        echo "<div class='containerCU'><h2>Cadastrado com sucesso</h2></div>";

    } else {
        unset($_SESSION['usuario']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['tipo']);
        session_unset();
        session_destroy();
        require 'login.php';
        echo "<div class='containerCU'>Usuário já cadastrado</div>";
    }
}

    


?>




</body>
</html>