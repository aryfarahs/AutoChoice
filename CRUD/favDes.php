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

    // Atribuindo as variáveis
    $email = $_SESSION['email'];
    $id_usuario = $banco->query("select id_usuario from usuario where email = '$email';")->fetch_object()->id_usuario;
    $id_carro = $_GET['id_carro'];


    $banco->query("delete from favoritos where id_usuario = $id_usuario AND id_carro = $id_carro;");
    echo "<script>window.location = 'profile.php';</script>";
    

?>

<main>

</main>
<footer>

</footer>
</body>
</html>
