<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="../js/javascript.js"></script>
    <title>AutoChoice</title>
    <style>
        .vazio {
            text-decoration: none;
            color: #ffc000;
            &:hover {
                text-decoration: none;
                color: #eeb000;
                font-weight: bold;
            }
        }

        .seesus {
            display: flex;
            flex-direction: row;
            overflow-x: scroll;
        }

        .cu_card{
            border: 1px solid var(--amarelo);
            border-radius: 10px;
            min-width: 120px;
            max-width: 160px;
            width: 30%;
            min-height: 170px;
            max-height: 1000px;
            margin: 10px;

            display: flex;
            flex-direction: column;

            &:hover {
                cursor: pointer;
                background-color: lightgray;
            }
        }

        .cu_titulo {
            height: 40px;
            width: 100%;
            font-size: medium;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cu_foto {
            height: 100%;
            width: 100%;

            display: flex;
            justify-content: end;
            align-items: end;
            margin-right: 15px;
            margin-bottom: 5px;
        }
               
        .anyFav {
            display: flex;
            color: black;
            text-align: center;
            margin: 70px auto;
            justify-content: center;
            font-weight: lighter;
        }
        
    </style>
</head>
<body>


<?php
    require 'header.php';

?>


    <main>
        <div class="containerProfile ">
            <div class="cabeca">
                <img src="images/profile.png" alt="">
                <h1><?= "{$_SESSION['usuario']}"?></h1>
                <h4><?php 


            $resultado = $banco->query("select ano FROM usuario where nome_usuario = '{$_SESSION['usuario']}';");

            $objAtual = $resultado->fetch_object();

            echo "Ano: $objAtual->ano";
                
                
                
                
                
                
                
                
                
                
                
                
                ?></h4>
                <a href="settings.php"><img src="images/settings.png" class="conf2"></a>
            </div>
            <div class="listas">
                <div class="fav">
                    <h3>Favoritos</h3>

                    <div class="seesus">

                    



     <?php

        $email = $_SESSION['email'];



        $id_usuario = $banco->query("select id_usuario from usuario where email = '$email';")->fetch_object()->id_usuario;

    
        $resultado = $banco->query("Select * FROM favoritos AS f
        INNER JOIN usuario AS u ON f.id_usuario = u.id_usuario
        INNER JOIN carro AS c ON f.id_carro = c.id_carro
        WHERE u.id_usuario = $id_usuario;");

        $qtd = $resultado->num_rows;

        if($qtd == 0) {
            echo "<h5 class='anyFav' style='justify-content: center'>Nenhum veículo favoritado</h5>";
        } else {

            for($i = 1; $i <= $qtd; $i++){
                $objAtual = $resultado->fetch_object();

                echo "<div class='cu_card' onclick=\"window.location.href='infocarro.php?id_carro=$objAtual->id_carro'\">";
            ?>
                        <div class="cu_titulo">
                            <?="$objAtual->modelo"?>
                        </div>
                    
                        <div class="cu_foto" style='background-image: url(<?="$objAtual->imagem"?>); background-repeat: no-repeat ; background-size: contain; background-position: center center;'>
                            <?php echo "<span class='material-symbols-outlined'><a href='favDes.php?id_carro=$objAtual->id_carro' class='vazio'>close</span></a>"?>
                        </div>
                    </div>


        <?php
            }
        }
        ?>
                    

                    </div>
                </div>
    
                <div class="hist">
                    <h3>Histórico</h3>
                    <div class="card2">

                    </div>
                    <div class="card2">

                    </div>
                    <div class="card2">

                    </div>
                    <div class="card2">

                    </div>
                </div>
            </div>
        </div>
    
    </main>
    <footer>
        <h5>Todos os diretos reservados - AutoChoice</h5>
    </footer>
</body>
</html>