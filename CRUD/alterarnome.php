<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar nome</title>
    <style>
        .inline_a {
                font-size: 16px;
                color: black;
                text-align: center; 
                &:hover {
                    color: lightgray;
                }
            }
        </style>
</head>
<body>
<?php
    require 'header.php';


$atual = $_POST['atual'] ?? null;
$name = $_POST['name'] ?? null;
$emailatual = $_SESSION['email'];

    
if($atual == null || $name == null){
    require 'alterarnome-form.php';
} else {
    if(($banco->query("select * from usuario where email = '$emailatual' and nome_usuario = '$atual'")->num_rows) == 0){
        echo "<div class='containerCU'>Seu nome atual não corresponde</div>";
        require 'alterarnome-form.php';

    } else {

        if($atual == $name){
            echo "<div class='containerCU'>Seu novo nome não pode ser igual ao nome anterior</div>";
            require 'alterarnome-form.php';
        } else{

            $query = "update usuario SET nome_usuario = '$name'
            WHERE email = '$emailatual'";
        
            $banco->query($query);
            echo "<div class='containerCU'><h4>Nome alterado com sucesso</h4><br>";

            echo "<h4>Para sua segurança você foi desconectado. Realize seu login novamente. </h4>";
            echo "<h4 class='volta'><a href='logout.php'>Voltar para tela inicial</a><h4></div>";
        }

    }



}
    
    
?>

    
</body>
</html>