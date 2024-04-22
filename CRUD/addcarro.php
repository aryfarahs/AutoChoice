<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add carro</title>
</head>
<body>
    <?php
    require 'funcoes.php';

    ?>

    <?php

    if($_SESSION['tipo'] != 'admin'){
        echo "Voce nao tem acesso a essa pagina";
        echo "<a href='index.php'>Voltar</a>";
    } else {


        $categoria = $_POST['categoria'] ?? null;

        $marca = $_POST['categoria'] ?? null;


        if($categoria == null || $marca == null){

            require 'addcarro-form.php';
        } else{


# COLOCAR NO BBANCO E FAZER O CRU


        }

    }


    ?>








</body>
</html>