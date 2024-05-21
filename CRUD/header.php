<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add carro</title>
    <style>
        a, h4 {
            font-size: 1.5vw;
            color: white;
        }

        a:hover {
            color: lightgray;
        }

        .seilaa {
            position: absolute;
            right: 0;
        }

        .containerHeader {
            display: flex; 
            flex-direction: row; 
            justify-content: space-between;
        }

        .containerHeader > div {
            width: 100%;
        }

    </style>
</head>
<body class="formes">
    <header class="containerHeader">
        <div>
            <p>‎ </p>
        </div>
        <?php
            require 'funcoes.php';
            ?>
                
        <div>
            <a href="index.php">
                <img src="images/wlogo.png" class="logo" style="width: 15vw;">
            </a> 
        </div>
        <div style="margin-top: auto; text-align: right;">
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
        </div>
    </header>
</body>