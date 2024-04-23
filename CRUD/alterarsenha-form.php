<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar senha</title>
</head>
<body>
    <h2>Alterar senha</h2>
    <form action="alterarsenha.php" method="POST">

        <label for="atual">Senha atual</label>
        <input type="password" name="atual" id="atual" required>


        <br><br>
        <label for="senha">Nova senha:</label>
        <input type="password" name="senha" id="senha" required>

        <br><br>

        <input type="submit" value="Enviar">
    </form>

    <h4><a href="settings.php">Voltar</a></h4>
    <h4><a href="index.php">Voltar pra tela inicial</a></h4>



</body>
</html>