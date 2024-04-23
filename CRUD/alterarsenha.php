<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar senha</title>
</head>
<body>
<?php
    require 'funcoes.php';



$atual = $_POST['atual'] ?? null;
$senha = $_POST['senha'] ?? null;
$emailatual = $_SESSION['email'];




if($atual == null || $senha == null){
    require 'alterarsenha-form.php';
} else {

    if(($banco->query("select * from usuario where email = '$emailatual' and senha = '$atual'")->num_rows) == 0){
        echo "Sua senha atual não corresponde";
        require 'alterarsenha-form.php';

    } else {

        if($atual == $senha){
            echo "Sua nova senha não pode ser igual a senha antiga";
            require 'alterarsenha-form.php';
        } else{

            $query = "update usuario SET senha = '$senha'
            WHERE email = '$emailatual'";
        
            $banco->query($query);
            echo "Senha alterada com sucesso<br><br>";

            echo "Para sua segurança você foi desconectado. Realize seu login novamente. <br><br>";
            echo "<a href='logout.php'>Voltar para tela inicial</a>";
        }

    }








}





?>







    
</body>
</html>