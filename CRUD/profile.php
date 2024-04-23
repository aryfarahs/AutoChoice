<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="../js/javascript.js"></script>
    <title>AutoChoice</title>
</head>
<body>


<?php
    require 'funcoes.php';

?>




    <header>
        <img src="images/wlogo.png" class="logo">
    </header>
    <main>
        <div class="containerProfile">
            <div class="cabeca">
                <img src="images/profile.png" alt="">
                <h1><?= "{$_SESSION['usuario']}"?></h1>
                <a href="settings.php"><img src="images/settings.png" class="conf2"></a>
            </div>
            <div class="voltasai">
                <a href="index.php">Voltar</a>
                <h4><a href='logout.php'>Sair</a></h4>
            </div>
            <div class="listas">
                <div class="fav">
                    <h3>Favoritos</h3>
                    <div class="card2">
                        <img src="images/xclose.png" class="close">
                    </div>
                    <div class="card2">

                    </div>
                    <div class="card2">

                    </div>
                    <div class="card2">

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
    <footer id="footer">
        <h5>Todos os diretos reservados - AutoChoice</h5>
    </footer>
</body>
</html>