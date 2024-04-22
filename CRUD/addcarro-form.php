<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add carro</title>
</head>
<body>
    <h2>Adicionar carro</h2>
    <form action="addcarro.php" method="POST">

        <label for="categoria">categoria:</label><br>
        <input type="text" id="categoria" name="categoria" required><br><br>

        <label for="marca">marca:</label><br>
        <input type="text" id="marca" name="marca" required><br><br>

    

        <input type="submit" value="Enviar">
    </form>

    <h4><a href="index.php">Voltar pra tela inicial</a></h4>


</body>
</html>