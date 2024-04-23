<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>AutoChoice</title>
    <style>

        

    </style>
</head>
<header>

<?php
    require 'funcoes.php';
    
    
    ?>

    <img src="images/wlogo.png" class="logo">

        <?php

            if(empty($_SESSION['usuario'])){
                echo "<a href='login-form.php'><img src='images/profile.png' id='loginadas'></img></a>";
            } else {
                
        
                echo " <a href='profile.php'><img src='images/profile.png' id='loginadas'></img></a>";
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