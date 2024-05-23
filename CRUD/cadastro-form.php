<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
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

        .error {
            display: none; /* Ocultar a mensagem de erro inicialmente */
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        input:invalid + .error {
            display: block; /* Mostrar a mensagem de erro se o input for inválido */
        }

    </style>

</head>
<body style="min-height: 830px;">
    <header>
        <a href="index.php" class="teste">
            <img src="images/wlogo.png" class="logo" style="width: 15vw;">
        </a> 
    </header>
    <div id="containerCad" class="container" style="height: 570px;">
    <h2>Cadastro</h2>
        <form action="cadastro.php" method="POST" class="formLOG" id="formCad">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="senha">Senha:</label><br>
            <div class="divolho">
                <input type="password" id="senha" name="senha" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[$*&@#_])[A-Za-z\d$*&@#_]{6,}(?!(?:1234|4321))$"><br><br>
                <img src="images/olho.png" id="olhoF" class="olhoF" onclick="trocaOlho()">
                <img src="images/olhoF.png" id="olho" class="olho" onclick="trocaOlho()">
            </div>
            <span class="error" id="senhaErro">A senha deve ter pelo menos 6 caracteres, incluindo uma letra maiúscula, uma letra minúscula, um número e um caractere especial ($*&@#_).</span>

            <label for="senha2">Confirmar Senha:</label><br>
            <div class="divolho">
                <input type="password" id="senha2" name="senha2" required><br><br>
                <img src="images/olho.png" id="olhoF2" class="olhoF" onclick="trocaOlho2()">
                <img src="images/olhoF.png" id="olho2" class="olho" onclick="trocaOlho2()">
            </div>
            <span class="error" id="senha2Erro">A senha deve ser igual nos dois campos!.</span>

            <input type="submit" value="OK" class="envia">
        </form>
        <h4 id="voltarCad" class="volta" style="margin-top: 180px;"><a href="login.php">Voltar para login</a></h4>
        <h4 class="volta"><a href="index.php">Voltar pra tela inicial</a></h4>
    </div>

    <script src="js/passVal.js"></script>
    <script src="js/javascript.js"></script>
</body>
</html>