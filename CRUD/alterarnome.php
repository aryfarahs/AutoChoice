<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar nome</title>
</head>
<body>
<?php
    require 'funcoes.php';


$atual = $_POST['atual'] ?? null;
$name = $_POST['name'] ?? null;
$emailatual = $_SESSION['email'];

    
if($atual == null || $name == null){
    require 'alterarnome-form.php';
} else {
    if(($banco->query("select * from usuario where email = '$emailatual' and nome_usuario = '$atual'")->num_rows) == 0){
        echo "Seu nome atual não corresponde";
        require 'alterarnome-form.php';

    } else {

        if($atual == $name){
            echo "Seu novo nome não pode ser igual ao nome anterior";
            require 'alterarnome-form.php';
        } else{

            $query = "update usuario SET nome_usuario = '$name'
            WHERE email = '$emailatual'";
        
            $banco->query($query);
            echo "Nome alterado com sucesso<br><br>";

            echo "Para sua segurança você foi desconectado. Realize seu login novamente. <br><br>";
            echo "<a href='logout.php'>Voltar para tela inicial</a>";
        }

    }



}
    
    
?>

    
</body>
</html>