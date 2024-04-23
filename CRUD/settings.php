<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Settings</title>
</head>
<body>
<?php
    require 'funcoes.php';

    ?>
<div class="arrumamento">
    <h2>O que deseja alterar?</h2>
    <?php
    echo '<a href="alterarnome.php">1. Nome de Usuário</a>';

    echo "<br><br>";


    echo '<a href="alterarsenha.php">2. Senha</a>';
    echo "<br><br>";
    echo "<h4><a href='profile.php'>Voltar para tela de perfil</a></h4>";
    echo "<h4><a href='index.php'>Voltar para tela inicial</a></h4>";


    ?>
</div>



    
</body>
</html>