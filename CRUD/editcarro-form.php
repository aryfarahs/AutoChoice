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
    <h2>Editar carro</h2>
    <form action="editarcarro.php" method="POST" id="formEdit">
        <input type="hidden" name="id_carro" value="<?php echo $carro->id_carro; ?>">

        <label for="categoria">Categoria: <span style="color: red;">*</span></label>
            <input type="text" id="categoria" name="categoria" value="<?php echo $carro->categoria; ?>">
            <br><br>

            <label for="marca">Marca: <span style="color: red;">*</span></label>
            <input type="text" id="marca" name="marca" value="<?php echo $carro->marca; ?>">
            <br><br>

            <label for="modelo">Modelo: <span style="color: red;">*</span></label>
            <input type="text" id="modelo" name="modelo" value="<?php echo $carro->modelo; ?>">
            <br><br>

            <label for="motor">Motor: <span style="color: red;">*</span></label>
            <input type="text" id="motor" name="motor" value="<?php echo $carro->motor; ?>"">
            <br><br>

            <label for="potencia">Potencia: <span style="color: red;">*</span></label>
            <input type="number" id="potencia" name="potencia" value="<?php echo $carro->potencia; ?>">
            <br><br>

            <label for="qntLugares">Quantidade de lugares: <span style="color: red;">*</span></label>
            <input type="number" id="qntLugares" name="qntLugares" value="<?php echo $carro->qntLugares; ?>">
            <br><br>

            <label for="ano">Ano: <span style="color: red;">*</span></label>
            <input type="number" id="ano" name="ano" value="<?php echo $carro->ano; ?>">
            <br><br>

            <label for="faixaPreco">Faixa de preço: <span style="color: red;">*</span></label>
            <input type="number" id="faixaPreco" name="faixaPreco" value="<?php echo $carro->faixaPreco; ?>">
            <br><br>

            <label for="consumoEstrada">Consumo na estrada: <span style="color: red;">*</span></label>
            <input type="number" id="consumoEstrada" name="consumoEstrada" value="<?php echo $carro->consumoEstrada; ?>">
            <br><br>

            <label for="consumoCidade">Consumo na cidade: <span style="color: red;">*</span></label>
            <input type="number" id="consumoCidade" name="consumoCidade" value="<?php echo $carro->consumoCidade; ?>">
            <br><br>

            <label for="qntAirbags">Quantidade de airbags: <span style="color: red;">*</span></label>
            <input type="number" id="qntAirbags" name="qntAirbags" value="<?php echo $carro->qntAirbags; ?>">

            <br><br>
            <label for="estepe">Possui estepe? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueEstepe" name="estepe" value="1" <?php if ($carro->estepe == 1) echo 'checked'; ?>>
            <label for="trueEstepe">Sim</label><br>
            <input type="radio" id="falseEstepe" name="estepe" value="0" <?php if ($carro->estepe == 0) echo 'checked'; ?>>
            <label for="falseEstepe">Não</label>

            <br><br>
            <label for="notaTesteSeguranca">Nota no Teste de Segurança: <span style="color: red;">*</span></label>
            <input type="number" id="notaTesteSeguranca" name="notaTesteSeguranca" value="<?php echo $carro->notaTesteSeguranca; ?>">

            <br><br>
            <label for="appleAndroid">Possui Apple CarPlay ou Android Auto? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueACAA" name="appleAndroid" value="1" <?php if ($carro->appleAndroid == 1) echo 'checked'; ?>>
            <label for="trueACAA">Sim</label><br>
            <input type="radio" id="falseACAA" name="appleAndroid" value="0" <?php if ($carro->appleAndroid == 0) echo 'checked'; ?>>
            <label for="falseACAA">Não</label>

            <br><br>
            <label for="transmissao">Tipo da transmissão: <span style="color: red;">*</span></label>
            <input type="text" id="transmissao" name="transmissao" value="<?php echo $carro->transmissao; ?>">

            <br><br>
            <label for="portaMalas">Tamanho do porta malas: <span style="color: red;">*</span></label>
            <input type="number" id="portaMalas" name="portaMalas" value="<?php echo $carro->portaMalas; ?>">

            <br><br>
            <label for="altura">Altura: <span style="color: red;">*</span></label>
            <input type="number" id="altura" name="altura" value="<?php echo $carro->altura; ?>">

            <br><br>
            <label for="largura">Largura: <span style="color: red;">*</span></label>
            <input type="number" id="largura" name="largura" value="<?php echo $carro->largura; ?>">

            <br><br>
            <label for="comprimento">Comprimento: <span style="color: red;">*</span></label>
            <input type="number" id="comprimento" name="comprimento" value="<?php echo $carro->comprimento; ?>">

            <br><br>
            <label for="zeroACem">Velocidade que vai de 0 a 100 km/h: <span style="color: red;">*</span></label>
            <input type="number" id="zeroACem" name="zeroACem" value="<?php echo $carro->zeroACem; ?>">

            <br><br>
            <label for="propulsao">Propulsão: <span style="color: red;">*</span></label>
            <input type="text" id="propulsao" name="propulsao" value="<?php echo $carro->propulsao; ?>">
            
            <br><br>
            <label for="tracao">Tracao: <span style="color: red;">*</span></label>
            <input type="text" id="tracao" name="tracao" value="<?php echo $carro->tracao; ?>">

            <br><br>
            <label for="torque">Torque: <span style="color: red;">*</span></label>
            <input type="number" id="torque" name="torque" value="<?php echo $carro->torque; ?>">

            <br><br>
            <label for="importado">É importado? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueImport" name="importado" value="1" <?php if ($carro->importado == 1) echo 'checked'; ?>>
            <label for="trueImport">Sim</label><br>
            <input type="radio" id="falseImport" name="importado" value="0" <?php if ($carro->importado == 0) echo 'checked'; ?>>
            <label for="falseImport">Não</label>

            <br><br>
            <label for="cameraRe">Possui câmera de ré? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueCamRe" name="cameraRe" value="1" <?php if ($carro->cameraRe == 1) echo 'checked'; ?>>
            <label for="trueCamRe">Sim</label><br>
            <input type="radio" id="falseCamRe" name="cameraRe" value="0" <?php if ($carro->cameraRe == 0) echo 'checked'; ?>>
            <label for="falseCamRe">Não</label>

            <br><br>
            <label for="sensorEstacionar">Possui sensor para estacionar? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueSensor" name="sensorEstacionar" value="1" <?php if ($carro->sensorEstacionar == 1) echo 'checked'; ?>>
            <label for="trueSensor">Sim</label><br>
            <input type="radio" id="falseSensor" name="sensorEstacionar" value="0" <?php if ($carro->sensorEstacionar == 0) echo 'checked'; ?>>
            <label for="falseSensor">Não</label>

            <br><br>
            <label for="tetoSolar">Possui teto solar? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueTetoSolar" name="tetoSolar" value="1" <?php if ($carro->tetoSolar == 1) echo 'checked'; ?>>
            <label for="trueTetoSolar">Sim</label><br>
            <input type="radio" id="falseTetoSolar" name="tetoSolar" value="0" <?php if ($carro->tetoSolar == 0) echo 'checked'; ?>>
            <label for="falseTetoSolar">Não</label>

            <br><br>
            <label for="chavePresencial">Possui chave presencial? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueChavePres" name="chavePresencial" value="1" <?php if ($carro->chavePresencial == 1) echo 'checked'; ?>>
            <label for="trueChavePres">Sim</label><br>
            <input type="radio" id="falseChavePres" name="chavePresencial" value="0" <?php if ($carro->chavePresencial == 0) echo 'checked'; ?>>
            <label for="falseChavePres">Não</label>

            <br><br>
            <label for="farolNeblina">Possui farol de neblina? <span style="color: red;">*</span></label><br>
            <input type="radio" id="trueFarolNeblina" name="farolNeblina" value="1" <?php if ($carro->farolNeblina == 1) echo 'checked'; ?>>
            <label for="trueFarolNeblina">Sim</label><br>
            <input type="radio" id="falseFarolNeblina" name="farolNeblina" value="0" <?php if ($carro->farolNeblina == 0) echo 'checked'; ?>>
            <label for="falseFarolNeblina">Não</label>
    
            <br><br>
            <input type="submit" value="Salvar" id="salva">
    </form>
    <h4 class="volta"><a href="index.php">Voltar pra tela inicial</a></h4>
</div>

    
</body>
</html>