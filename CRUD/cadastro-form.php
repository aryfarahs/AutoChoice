<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>

</head>
<body>
    <div class="container" style="height: 500px;">
    <h2>Cadastro</h2>
        <form action="cadastro.php" method="POST" class="formLOG">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" value="OK" class="envia">
        </form>
        <h4 class="volta" style="margin-top: 100px;"><a href="login.php">Voltar para login</a></h4>
        <h4 class="volta"><a href="index.php">Voltar pra tela inicial</a></h4>
    </div>

</body>
</html>