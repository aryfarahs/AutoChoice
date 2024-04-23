<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add carro</title>
</head>
<body>
    <?php
    require 'funcoes.php';

    ?>

    <?php

    if($_SESSION['tipo'] != 'admin'){
        echo "Voce nao tem acesso a essa pagina";
        echo "<a href='index.php'>Voltar</a>";
    } else {





        $categoria = $_POST['categoria'] ?? null;
        $marca = $_POST['marca'] ?? null;
        $modelo = $_POST['modelo'] ?? null;
        $motor = $_POST['motor'] ?? null;
        $potencia = $_POST['potencia'] ?? null;
        $qntLugares = $_POST['qntLugares'] ?? null;
        $ano = $_POST['ano'] ?? null;
        $faixaPreco = $_POST['faixaPreco'] ?? null;
        $consumoEstrada = $_POST['consumoEstrada'] ?? null;
        $consumoCidade = $_POST['consumoCidade'] ?? null;
        $qntAirbags = $_POST['qntAirbags'] ?? null;
        $estepe = $_POST['estepe'] ?? null;
        $notaTesteSegurança = $_POST['notaTesteSegurança'] ?? null;
        $appleAndroid = $_POST['appleAndroid'] ?? null;
        $transmissao = $_POST['transmissao'] ?? null;
        $portaMalas = $_POST['portaMalas'] ?? null;
        $altura = $_POST['altura'] ?? null;
        $largura = $_POST['largura'] ?? null;
        $comprimento = $_POST['comprimento'] ?? null;
        $zeroACem = $_POST['zeroACem'] ?? null;
        $propulsao = $_POST['propulsao'] ?? null;
        $tracao = $_POST['tracao'] ?? null;
        $torque = $_POST['torque'] ?? null;
        $importado = $_POST['importado'] ?? null;
        $cameraRe = $_POST['cameraRe'] ?? null;
        $sensorEstacionar = $_POST['sensorEstacionar'] ?? null;
        $tetoSolar = $_POST['tetoSolar'] ?? null;
        $chavePresencial = $_POST['chavePresencial'] ?? null;
        $farolNeblina = $_POST['farolNeblina'] ?? null;

        

        
        if ($categoria == null || $marca == null || $modelo == null || $motor == null || $potencia == null || $qntLugares == null || $ano == null || $faixaPreco == null || $consumoEstrada == null || $consumoCidade == null || $qntAirbags == null || $estepe == null || $notaTesteSegurança == null || $appleAndroid == null || $transmissao == null || $portaMalas == null || $altura == null || $largura == null || $comprimento == null || $zeroACem == null || $propulsao == null || $tracao == null || $torque == null || $importado == null || $cameraRe == null || $sensorEstacionar == null || $tetoSolar == null || $chavePresencial == null || $farolNeblina == null){
            require 'addcarro-form.php';
        } else {

            if(($banco->query("Select * from carro where modelo = '$modelo'")->num_rows) == 0){

    
                $query = "insert INTO Carro (categoria, marca, modelo, motor, potencia, qntLugares, ano, faixaPreco, consumoEstrada, consumoCidade, qntAirbags, estepe, notaTesteSeguranca, appleAndroid, transmissao, portaMalas, altura, largura, 
                comprimento, zeroACem, propulsao, tracao, torque, importado, cameraRe, sensorEstacionar, tetoSolar, chavePresencial, farolNeblina)
                VALUES
                ('$categoria', '$marca', '$modelo', '$motor', $potencia, $qntLugares, $ano, $faixaPreco, $consumoEstrada, $consumoCidade, $qntAirbags, $estepe, $notaTesteSegurança, $appleAndroid, '$transmissao', $portaMalas, $altura, $largura, $comprimento, $zeroACem, '$propulsao', '$tracao', $torque, $importado, $cameraRe, $sensorEstacionar, $tetoSolar, $chavePresencial, $farolNeblina);";

                $banco->query($query);
                echo "<div class='containerCU'><h2>Novo carro cadastrado com sucesso</h2>";
                echo "<h4 class='volta'><a href='index.php'>Voltar para tela inicial</a></h4></div>";
    
    
            } else {
                echo "<div class='containerCU'><h2>Este carro ja está cadastrado no nosso banco de dados</h2></div>";
                echo "<br>";
                require 'addcarro-form.php';
            }






        }




















        

    }


    ?>








</body>
</html>