<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoChoice</title>
    <style>

        * {
            margin: 0px;
            padding: 0px;
        }

        :root {
            --pretin: #121517;
            --branquin: #F7F9F9;
            --cinza-escuro: #4C5154;
            --amarelo: #FFC000;
        }

        html, body {
            background-color: #121517;
            min-height: 10vh;
            background-color: var(--branquin);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        header {
            background-color: var(--cinza-escuro);
            text-align: center;
            padding: 2%;
            box-shadow: 0px 1px 4px 3px #a9a9a9;
        }

        header > img {
            width: 15%;
        }

        header > h4{
            text-align: right;
        }

        header #loginadas {
            margin-right: 0px;
            width: 6%;
            max-width: 60px;
            padding-left:;
        }


        .forml {
            display: flex;
            margin: auto;
            margin-top: 20px;
            display: flex;
            align-items: center;
            border: 1px solid var(--amarelo);
            border-radius: 10px;
            max-width: 70%;
            height: 34px;
            
        }

        .txt {
            height: 20px;
            padding: 7px 7px 7px 20px;
            font-size: 16px;
            border: 0px;
            border-radius: 10px 0px 0px 10px;
            width: 100%;
            box-shadow: 1px 1px 3px 0.5px lightgray inset;
            z-index: 1px;
            position: relative;
        }

        .txt:focus-visible {
            outline: none;
        }


        .forml:hover {
            border: 1px solid #d4a30e;
            border-radius: 10px;
        }

        .search {
            align-items: right;
            border: 0px solid var(--amarelo);
            border-radius: 0px 10px 10px 0px;
            background-color: var(--amarelo);
            min-width: 10%;
            min-height: 34px;
        }

        .search:hover {
            cursor: pointer;
            background-color: #d4a30e;
            border: 1px solid #d4a30e;
        }

        .lupa {
            width: 15px;
        }



        footer {
            color: var(--branquin);
        
            bottom: 0;
            width: 100%;
            
        }

        footer > h5 {
            background-color: var(--cinza-escuro);
            text-align: center;
            padding: 7px;
            font-family: Arial, Helvetica, sans-serif;
        }



        .galeria {
            
            /* background-color: red; */
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap;
            height: 100%;
            max-width: 800px;
            margin: auto;
        }

        .card {
            border: 1px solid var(--amarelo);
            border-radius: 10px;
            min-width: 120px;
            max-width: 160px;
            width: 30%;
            min-height: 170px;
            max-height: 1000px;
            margin: 10px;
        }

        .card:hover {
            background-color: lightgray;
            cursor: pointer;
        }

        .fotoCard {

            
            width: 80%;
            height: 80%;
        }


        .tabelacard {
            background-color: var(--amarelo);
            color: white;
            width: 100%;
            height: 30px;
            border-radius: 10px 10px 0px 0px;
            font-weight: bold;
        }

        td {
            text-align: center;
        }






    </style>
</head>
<header>
<?php
    require 'funcoes.php';
    
    
    ?>

    <img src="images/wlogo.png" class="logo">

        <?php

            if(empty($_SESSION['usuario'])){
                echo "<a href='login-form.php'><img src='../TEST/images/profile.png' id='loginadas'></img></a>";
            } else {
                
        
                echo " <a href='profile.php'><img src='../TEST/images/profile.png' id='loginadas'></img></a>";
            }
        
            
        
        ?>


</header>
<body>

            
    

        <form action="" class="forml">
            <input type="text" name="search" placeholder="O que deseja ver?" class="txt" id="forml">

            <button type="submit" class="search"><img src="images/lupa.png" class="lupa"></button>
        </form> 


    <?php
    
    $resultado = $banco->query(" select * FROM carro;");

    $qtd = $resultado->num_rows;

    echo "<div class='galeria'>";

    for($i = 1; $i <= $qtd; $i++){
        $objAtual = $resultado->fetch_object();

        
            echo "<div class='card' style='background-image: url(images/carros/$objAtual->id_carro.png); background-repeat: no-repeat ; background-size: contain; background-position: center center'>";
                echo "<div class='titulo'>";
                    echo "<table class='tabelacard'>";
                        echo "<tr>";
                            echo "<td >";
                                echo "{$objAtual->modelo}";

                            echo "</td>";
                        echo "</tr>";
                    echo "</table>";
                echo "</div>";

                echo "<div class='fotoCard'>";
                echo "</div>";
            echo "</div>";
    }

    if($_SESSION['tipo'] == 'admin'){
        echo "<a href='addcarro.php'><div class='card' style='background-image: url(images/carros/plus.jpg); background-repeat: no-repeat ; background-size: contain; background-position: center center'";

        echo "</div>";
    }

    echo "</div></a>";
    ?>





<!-- <div class="personal" id="personalPage">
            <img src="images/arrowright.png" class="arrowOpen" onclick="openPopUp()"> 
        </div>
        <div class="overlay" id="overlay">
            <img src="images/arrowleft.png" class="arrowClose" onclick="closePopUp()">
            <div class="geral">
                <div class="pageFunc">
                    <img src="images/profile1.png"><a href="profile.php" style="top: 60px">Perfil</a><br>
                    <img src="images/house.png" ><a href="index.php" style="top: 100px">Home</a><br>
                    <img src="images/heart.png" ><a href="index.php" style="top: 135px">Favoritos</a><br> 
                </div>
                <div class="config">
                    <img src="images/settings.png"><a href="settings.php" style="bottom: 76px">Configurações</a><br>
                    <img src="images/info.png" ><a href="info.php" style="bottom: 40px">Info</a><br> 
                </div>
            </div>
        </div> -->

    







    
</body>
<footer id="footer">
        <h5>Todos os diretos reservados - AutoChoice</h5>
    </footer>
</html>