<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>header</title>
    <style>
        .teste {
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
            <a href="index.php" class="teste">
                <img src="images/wlogo.png" class="logo" style="width: 15vw;">
            </a> 
        </div>
        <div style="margin-top: auto; text-align: right;">
            <?php

            if(empty($_SESSION['usuario'])){
                echo "<a href='login-form.php' class='teste'>LOGIN</a>";
            
            } else {
                echo "
                <div class=''seilaa>
                    <h4 class='teste'>Olá, <a href='profile.php' class='teste'>{$_SESSION['usuario']}</a></h4>
                    <h4><a href='logout.php' class='teste'>Sair</a></>
                </div>";
                }

            ?>
        </div>
    </header>
</body>