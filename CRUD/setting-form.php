<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Setting</title>
</head>
<body>
    <div class="container">
    <h2>Login</h2>
        <form action="settings.php" method="POST">

            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" value="OK" class="envia">
        </form>

        <h4 class="npcGO">Não possui cadastro? <a href="cadastro-form.php">Clique aqui!</a></h4>
    </div>

    <h1 class="TEMPORARY" onclick="history.go(-1)" >&larr;</h1>


</body>
</html>