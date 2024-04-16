<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .container {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            height: 350px;
            width: 30%;
            min-width: 400px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px 1px lightgray;
            margin: auto;
            margin-top: 200px;
        }

        .TEMPORARY {
            width: fit-content;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
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
    <h2>Login</h2>
        <form action="login.php" method="POST" class="formLOG">

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" value="OK" class="envia">
        </form>

        <h4 class="npcGO">Não possui cadastro? <a href="cadastro-form.php">Clique aqui!</a></h4>
    </div>

    <h1 class="TEMPORARY" onclick="history.go(-1)" >&larr;</h1>


</body>
</html>