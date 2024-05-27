<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar nome</title>
    <style>
        a, h4 {
            font-size: 1.5vw;
            color: white;
        }

        a:hover {
            color: lightgray;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Alterar nome</h2>
        <form action="alterarnome.php" method="POST">

            <label for="atual">Nome atual: <span style="color: red;">*</span></label>
            <input type="text" name="atual" id="atual" required>

            <br><br>

            <label for="name">Novo nome: <span style="color: red;">*</span></label>
            <input type="text" name="name" id="name" required>

            <br><br>

            <input type="submit" value="Enviar" id="envia">
        </form>
        <h4><a href="settings.php" class="inline_a">Voltar</a></h4>
        <h4><a href="index.php" class="inline_a">Voltar pra tela inicial</a></h4>
    </div>  
    
   
</body>
</html>