<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>

</head>
<body style="min-height: 830px;">
    <header>
        <img src="images/wlogo.png" class="logo">
    </header>
    <div class="container" style="height: 570px;">
    <h2>Cadastro</h2>
        <form action="cadastro.php" method="POST" class="formLOG">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nomeC" name="nomeC" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="emailC" name="emailC" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senhaC" name="senhaC" minlength="6"><br><br>

            <label for="senha">Confirmar Senha:</label><br>
            <input type="password" id="senha2" name="senha2" minlength="6" required><br><br>

            <input type="submit" value="OK" class="envia">
        </form>
        <h4 class="volta" style="margin-top: 180px;"><a href="login.php">Voltar para login</a></h4>
        <h4 class="volta"><a href="index.php">Voltar pra tela inicial</a></h4>
    </div>

</body>
</html>