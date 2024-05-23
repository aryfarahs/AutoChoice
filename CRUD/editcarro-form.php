<form action="editarcarro.php" method="post">
    <input type="hidden" name="id_carro" value="<?php echo $carro->id_carro; ?>">
    Categoria: <input type="text" name="categoria" value="<?php echo $carro->categoria; ?>"><br>
    Marca: <input type="text" name="marca" value="<?php echo $carro->marca; ?>"><br>
    Modelo: <input type="text" name="modelo" value="<?php echo $carro->modelo; ?>"><br>
    Motor: <input type="text" name="motor" value="<?php echo $carro->motor; ?>"><br>
    Potência: <input type="text" name="potencia" value="<?php echo $carro->potencia; ?>"><br>
    Quantidade de Lugares: <input type="text" name="qntLugares" value="<?php echo $carro->qntLugares; ?>"><br>
    Ano: <input type="text" name="ano" value="<?php echo $carro->ano; ?>"><br>
    Faixa de Preço: <input type="text" name="faixaPreco" value="<?php echo $carro->faixaPreco; ?>"><br>
    Consumo na Estrada: <input type="text" name="consumoEstrada" value="<?php echo $carro->consumoEstrada; ?>"><br>
    Consumo na Cidade: <input type="text" name="consumoCidade" value="<?php echo $carro->consumoCidade; ?>"><br>
    Quantidade de Airbags: <input type="text" name="qntAirbags" value="<?php echo $carro->qntAirbags; ?>"><br>
    Estepe: <input type="text" name="estepe" value="<?php echo $carro->estepe; ?>"><br>
    Nota no Teste de Segurança: <input type="text" name="notaTesteSeguranca" value="<?php echo $carro->notaTesteSeguranca; ?>"><br>
    Compatibilidade Apple/Android: <input type="text" name="appleAndroid" value="<?php echo $carro->appleAndroid; ?>"><br>
    Transmissão: <input type="text" name="transmissao" value="<?php echo $carro->transmissao; ?>"><br>
    Porta-Malas: <input type="text" name="portaMalas" value="<?php echo $carro->portaMalas; ?>"><br>
    Altura: <input type="text" name="altura" value="<?php echo $carro->altura; ?>"><br>
    Largura: <input type="text" name="largura" value="<?php echo $carro->largura; ?>"><br>
    Comprimento: <input type="text" name="comprimento" value="<?php echo $carro->comprimento; ?>"><br>
    0 a 100 km/h: <input type="text" name="zeroACem" value="<?php echo $carro->zeroACem; ?>"><br>
    Propulsão: <input type="text" name="propulsao" value="<?php echo $carro->propulsao; ?>"><br>
    Tração: <input type="text" name="tracao" value="<?php echo $carro->tracao; ?>"><br>
    Torque: <input type="text" name="torque" value="<?php echo $carro->torque; ?>"><br>
    Importado: <input type="text" name="importado" value="<?php echo $carro->importado; ?>"><br>
    Câmera de Ré: <input type="text" name="cameraRe" value="<?php echo $carro->cameraRe; ?>"><br>
    Sensor de Estacionamento: <input type="text" name="sensorEstacionar" value="<?php echo $carro->sensorEstacionar; ?>"><br>
    Teto Solar: <input type="text" name="tetoSolar" value="<?php echo $carro->tetoSolar; ?>"><br>
    Chave Presencial: <input type="text" name="chavePresencial" value="<?php echo $carro->chavePresencial; ?>"><br>
    Farol de Neblina: <input type="text" name="farolNeblina" value="<?php echo $carro->farolNeblina; ?>"><br>
    <input type="submit" value="Salvar">
</form>

