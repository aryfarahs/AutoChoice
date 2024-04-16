<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../MAIN/css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    <h4><a href="login.php">Voltar para login</a></h4>
    <h4><a href="index.php">Voltar pra tela inicial</a></h4>
    

</body>
</html>