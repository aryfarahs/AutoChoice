<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add carro</title>
    <style>
        a, h4 {
            color: white;
        }
        .seilaa {
            position: absolute;
            right: 0;
        }
    </style>
</head>
<body class="formes">
    <header>
        <?php
            require 'funcoes.php';
        ?>
                
            <img src="images/wlogo.png" class="logo">
        
        <?php

        if(empty($_SESSION['usuario'])){
            echo "<a href='login-form.php'>LOGIN</a>";
        
        } else {
            echo "
            <div class=''seilaa>
                <h4>Olá, <a href='profile.php'>{$_SESSION['usuario']}</a></h4>
                <h4><a href='logout.php'>Sair</a></>
            </div>";
            }

        ?>
    </header>
</body>