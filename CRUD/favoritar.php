<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>AutoChoice</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

require 'funcoes.php';

// Verificando se o usuário está logado
if (empty($_SESSION['email'])) {
    echo "<script>
            swal({
                title: 'Erro!',
                text: 'Você precisa estar logado para favoritar carros!',
                icon: 'error',
                button: 'OK',
            }).then(function() {
                window.location = 'login.php';
            });
          </script>";
} else {
    // Atribuindo as variáveis
    $email = $_SESSION['email'];
    $id_usuario = $banco->query("select id_usuario from usuario where email = '$email';")->fetch_object()->id_usuario;
    $id_carro = $_GET['id_carro'];

    // Conferindo se o carro já foi adicionado
    $qtd = $banco->query("select * FROM favoritos AS f
    INNER JOIN usuario AS u ON f.id_usuario = u.id_usuario
    INNER JOIN carro AS c ON f.id_carro = c.id_carro
    WHERE u.id_usuario = $id_usuario
    AND c.id_carro = $id_carro;")->num_rows;

    if($qtd != 0){
        echo "<script>
                swal({
                    title: 'Aviso!',
                    text: 'Esse carro já foi favoritado!',
                    icon: 'warning',
                    button: 'OK',
                }).then(function() {
                    window.location = 'index.php';
                });
              </script>";
    } else {
        $banco->query("insert into favoritos (id_usuario, id_carro) values ($id_usuario, $id_carro);");
        echo "<script>window.location = 'index.php';</script>";
    }
}

?>
</body>
</html>
