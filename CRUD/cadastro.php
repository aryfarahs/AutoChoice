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


    $email = $_POST['emailC'] ?? null;
    $senha = $_POST['senhaC'] ?? null;
    $nome = $_POST['nomeC'] ?? null;


    if ($email == null || $senha == null || $nome == null) {
        require 'cadastro-form.php';
    } else {

        if(($banco->query("Select id_usuario, nome_usuario, email, senha, tipo from usuario where email = '$email'")->num_rows) == 0){
            
            $query = "insert INTO usuario (nome_usuario, email, senha, tipo) VALUES ('$nome', '$email', '$senha', 'normal');";
        
            $banco->query($query);
            #era bom fazer uma validação aqui
            require 'login-form.php';
            echo "<div class='containerCU'><h2>Cadastrado com sucesso</h2></div>";

        } else {
            require 'login.php';
            echo "<div class='containerCU'>Usuário ja cadastrado</div>";
        }
    
 
    }


?>




</body>
</html>