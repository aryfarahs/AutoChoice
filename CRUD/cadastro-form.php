<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../TEST/css/style.css">
    <title>Cadastro</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        html, body {
            min-height: 60vh;
        }

        h2 {
            text-align: center;
            padding: 10px;
            margin-bottom: 30px;
            border-radius: 5px;
        }
        h4 {
            margin: 5px 0px;
        }

        label {
            color: #4C5154;
        }

        input { 
            width: 95%;
            padding: 7px;
            border-radius: 5px;
            border: 1px solid #4C5154;
        }

        a {
            text-decoration: none;
            color: #4C5154;
        }

        a:hover {
            text-decoration: underline;
        }

        #voltaTudo:hover {
            cursor: pointer;
            color: lightgray;   
            text-decoration: none;        
        }

        .container {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            height: 420px;
            min-height: 350px;
            width: 30%;
            min-width: 400px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px 1px lightgray;
            margin: auto;
            margin-top: 140px;
        }

        .TEMPORARY {
            width: fit-content;
            margin: 0px;
            font-size: 16px;
            margin-top: 40px;
        }

        .TEMPORARY:hover {
            cursor: pointer;
            color: lightgray;
        }

        .npcGO {
            text-align: center;
            bottom: 5px;
            padding: 5px;
        }

        .formLOG {
            height: 230px;
            padding: 5px;
        }

        .envia {
            background-color: #FFC000;
            width: 70px;
            padding: 10px;
            border-radius: 5px;
            margin: auto;
            border: 0px;
            color: white;
        }

        .envia:hover {
            background-color: #FFB000;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="container">
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
        <h4><a href="login.php">Voltar para login</a></h4>
        <h4><a href="index.php" id="voltaTudo">Voltar pra tela inicial</a></h4>
    </div>

</body>
</html>