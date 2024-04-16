<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/javascript.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>AutoChoice</title>
</head>
<body>

<?php
require_once 'funcoes.php';


?>






<?php






?>








    <header>
        <img src="../images/wlogo.png" class="logo">
    </header>
    
    <main>
        <form action="" class="forml">
            <input type="text" name="search" placeholder="O que deseja ver?" class="txt" id="forml">
            <button type="submit" class="search"><img src="../images/lupa.png" class="lupa"></button>
        </form> 
        <section class="catalog" > 
            <section class="line">
                <div class="card">

                </div>
                <div class="card">
    
                </div>
                <div class="card">
    
                </div>
                <div class="card">
    
                </div>
                <div class="card">
    
                </div>
                <div class="card">
    
                </div>    
            </section>  
        </section> 
        
        <div class="personal" id="personalPage">
            <img src="../images/arrowright.png" class="arrowOpen" onclick="openPopUp()"> 
        </div>
        <div class="overlay" id="overlay">
            <img src="../images/arrowleft.png" class="arrowClose" onclick="closePopUp()">
            <div class="geral">
                <div class="pageFunc">
                    <img src="../images/profile1.png"><a href="profile.php" style="top: 60px">Perfil</a><br>
                    <img src="../images/house.png" ><a href="index.php" style="top: 100px">Home</a><br>
                    <img src="../images/heart.png" ><a href="index.php" style="top: 135px">Favoritos</a><br> 
                </div>
                <div class="config">
                    <img src="../images/settings.png"><a href="settings.php" style="bottom: 76px">Configurações</a><br>
                    <img src="../images/info.png" ><a href="info.php" style="bottom: 40px">Info</a><br> 
                </div>
            </div>
        </div>
        
        
        
    </main>
    <footer id="footer">
        <h5>Todos os diretos reservados - AutoChoice</h5>
    </footer>
</body>
</html>