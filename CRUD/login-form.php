<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <style>
        .divolho {
            display: flex;
            flex-direction: row; 
            margin-bottom: 25px;
        }

        .divolho > .olho {
            display: block;
            width: 30px; 
            height: 30px; 
            margin: auto; 
            padding-left: 5px;
            &:hover {
                cursor: pointer;
            }
        }

        .divolho > .olhoF {
            display: none;
            width: 30px; 
            height: 30px; 
            margin: auto; 
            padding-left: 5px;
            &:hover {
                cursor: pointer;
            }
        }
    </style>
    <script src="js/javascript.js"></script>
</head>
<body>
    <header>
        <a href="index.php" class="teste">
            <img src="images/wlogo.png" class="logo" style="width: 15vw;">
        </a> 
    </header>
    <main>
        <div class="container">
        <h2>Login</h2>
            <form action="login.php" method="POST" class="formLOG">
                
                <label for="email">Email: <span style="color: red;">*</span></label><br>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="senha">Senha: <span style="color: red;">*</span></label><br>
                <div class="divolho">
                    <input type="password" id="senha" name="senha" required><br></br>
                    <img src="images/olho.png" id="olhoF" class="olhoF" onclick="trocaOlho()">
                    <img src="images/olhoF.png" id="olho" class="olho" onclick="trocaOlho()">
                </div>

                <input type="submit" value="OK" class="envia">
            </form>

            <h4 class="npcGO">Não possui cadastro? <a href="cadastro-form.php">Clique aqui!</a></h4>
            
            <h4 class="volta"><a href="index.php">Voltar pra tela inicial</a></h4>
        </div>
    </main>
</body>
</html>