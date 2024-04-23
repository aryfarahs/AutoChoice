<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add carro</title>
</head>
<body class="formes">
    <div class="adCar">
    <h2>Adicionar carro</h2>
    <form action="addcarro.php" method="POST">

        <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" required>
            <br><br>

            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required>
            <br><br>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required>
            <br><br>

            <label for="motor">Motor:</label>
            <input type="text" id="motor" name="motor" required>
            <br><br>

            <label for="potencia">Potencia:</label>
            <input type="number" id="potencia" name="potencia" required>
            <br><br>

            <label for="qntLugares">Quantidade de lugares:</label>
            <input type="number" id="qntLugares" name="qntLugares" required>
            <br><br>

            <label for="ano">Ano:</label>
            <input type="number" id="ano" name="ano" required>
            <br><br>

            <label for="faixaPreco">Faixa de preço:</label>
            <input type="number" id="faixaPreco" name="faixaPreco" required>
            <br><br>

            <label for="consumoEstrada">Consumo na estrada:</label>
            <input type="number" id="consumoEstrada" name="consumoEstrada" required>
            <br><br>

            <label for="consumoCidade">Consumo na cidade:</label>
            <input type="number" id="consumoCidade" name="consumoCidade" required>
            <br><br>

            <label for="qntAirbags">Quantidade de airbags:</label>
            <input type="number" id="qntAirbags" name="qntAirbags" required>

            <br><br>
            <label for="estepe">Possui estepe?</label><br>
            <input type="radio" id="trueEstepe" name="estepe" value="true">
            <label for="trueEstepe">Sim</label><br>
            <input type="radio" id="falseEstepe" name="estepe" value="false">
            <label for="falseEstepe">Não</label>

            <br><br>
            <label for="notaTesteSegurança">Nota no Teste de Segurança:</label>
            <input type="number" id="notaTesteSegurança" name="notaTesteSegurança" required>

            <br><br>
            <label for="appleAndroid">Possui Apple CarPlay ou Android Auto?</label><br>
            <input type="radio" id="trueACAA" name="appleAndroid" value="true">
            <label for="trueACAA">Sim</label><br>
            <input type="radio" id="falseACAA" name="appleAndroid" value="false">
            <label for="falseACAA">Não</label>

            <br><br>
            <label for="transmissao">Tipo da transmissão:</label>
            <input type="text" id="transmissao" name="transmissao" required>

            <br><br>
            <label for="portaMalas">Tamanho do porta malas:</label>
            <input type="number" id="portaMalas" name="portaMalas" required>

            <br><br>
            <label for="altura">Altura:</label>
            <input type="number" id="altura" name="altura" required>

            <br><br>
            <label for="largura">Largura:</label>
            <input type="number" id="largura" name="largura" required>

            <br><br>
            <label for="comprimento">Comprimento:</label>
            <input type="number" id="comprimento" name="comprimento" required>

            <br><br>
            <label for="zeroACem">Velocidade que vai de 0 a 100 km/h:</label>
            <input type="number" id="zeroACem" name="zeroACem" required>

            <br><br>
            <label for="propulsao">Propulsão:</label>
            <input type="text" id="propulsao" name="propulsao" required>
            
            <br><br>
            <label for="tracao">Tracao:</label>
            <input type="text" id="tracao" name="tracao" required>

            <br><br>
            <label for="torque">Torque:</label>
            <input type="number" id="torque" name="torque" required>

            <br><br>
            <label for="importado">É importado?</label><br>
            <input type="radio" id="trueImport" name="importado" value="true">
            <label for="trueImport">Sim</label><br>
            <input type="radio" id="falseImport" name="importado" value="false">
            <label for="falseImport">Não</label>

            <br><br>
            <label for="cameraRe">Possui câmera de ré?</label><br>
            <input type="radio" id="trueCamRe" name="cameraRe" value="true">
            <label for="trueCamRe">Sim</label><br>
            <input type="radio" id="falseCamRe" name="cameraRe" value="false">
            <label for="falseCamRe">Não</label>

            <br><br>
            <label for="sensorEstacionar">Possui sensor para estacionar?</label><br>
            <input type="radio" id="trueSensor" name="sensorEstacionar" value="true">
            <label for="trueSensor">Sim</label><br>
            <input type="radio" id="falseSensor" name="sensorEstacionar" value="false">
            <label for="falseSensor">Não</label>

            <br><br>
            <label for="tetoSolar">Possui teto solar?</label><br>
            <input type="radio" id="trueTetoSolar" name="tetoSolar" value="true">
            <label for="trueTetoSolar">Sim</label><br>
            <input type="radio" id="falseTetoSolar" name="tetoSolar" value="false">
            <label for="falseTetoSolar">Não</label>

            <br><br>
            <label for="chavePresencial">Possui chave presencial?</label><br>
            <input type="radio" id="trueChavePres" name="chavePresencial" value="true">
            <label for="trueChavePres">Sim</label><br>
            <input type="radio" id="falseChavePres" name="chavePresencial" value="false">
            <label for="falseChavePres">Não</label>

            <br><br>
            <label for="farolNeblina">Possui farol de neblina?</label><br>
            <input type="radio" id="trueFarolNeblina" name="farolNeblina" value="true">
            <label for="trueFarolNeblina">Sim</label><br>
            <input type="radio" id="falseFarolNeblina" name="farolNeblina" value="false">
            <label for="falseFarolNeblina">Não</label>
    
            <br><br>
        <input type="submit" value="Enviar" id="envia">
    </form>
    <h4 class="volta"><a href="index.php">Voltar pra tela inicial</a></h4>
</div>

    
</body>
</html>