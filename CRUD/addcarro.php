<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Carro</title>
</head>
<body>
    <?php
        require 'header.php';

        if ($_SESSION['tipo'] != 'admin') {
            echo "Você não tem acesso a essa página";
            echo "<a href='index.php'>Voltar</a>";
        } else {
            $imagem = $_FILES['imagem'] ?? null;
            $id_carro = $_POST['id_carro'] ?? null;
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
            $notaTesteSeguranca = $_POST['notaTesteSeguranca'] ?? null;
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

            $sql_verifica = "SELECT * FROM carro WHERE modelo = '$modelo'";
            $resultado = $banco->query($sql_verifica);

            if ($categoria == null || $marca == null || $modelo == null || $motor == null || $potencia == null || $qntLugares == null || $ano == null || $faixaPreco == null || $consumoEstrada == null || $consumoCidade == null || $qntAirbags == null || $estepe == null || $notaTesteSeguranca == null || $appleAndroid == null || $transmissao == null || $portaMalas == null || $altura == null || $largura == null || $comprimento == null || $zeroACem == null || $propulsao == null || $tracao == null || $torque == null || $importado == null || $cameraRe == null || $sensorEstacionar == null || $tetoSolar == null || $chavePresencial == null || $farolNeblina == null) {
                require 'addcarro-form.php';
            } else {
                if ($resultado->num_rows > 0) {
                    echo "<div class='containerCU'><h2>Erro: Modelo já cadastrado!</h2>";
                    echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar para tela inicial</a></h4>";
                    echo "<h4 class='volta'><a href='addcarro-form.php' style='color: #4C5154'>Tentar novamente</a></h4></div>";
                } else {
                    // Processamento do upload da imagem
                    if ($imagem && $imagem['error'] == 0) {
                        $diretorioDestino = "images/carros/";
                        $nomeArquivo = basename($imagem['name']);
                        $caminhoArquivo = $diretorioDestino . $nomeArquivo;
                        
                        if (move_uploaded_file($imagem['tmp_name'], $caminhoArquivo)) {
                            $query = "INSERT INTO Carro (categoria, marca, modelo, motor, potencia, qntLugares, ano, faixaPreco, consumoEstrada, consumoCidade, qntAirbags, estepe, notaTesteSeguranca, appleAndroid, transmissao, portaMalas, altura, largura, comprimento, zeroACem, propulsao, tracao, torque, importado, cameraRe, sensorEstacionar, tetoSolar, chavePresencial, farolNeblina, imagem)
                            VALUES ('$categoria', '$marca', '$modelo', '$motor', $potencia, $qntLugares, $ano, $faixaPreco, $consumoEstrada, $consumoCidade, $qntAirbags, $estepe, $notaTesteSeguranca, $appleAndroid, '$transmissao', $portaMalas, $altura, $largura, $comprimento, $zeroACem, '$propulsao', '$tracao', $torque, $importado, $cameraRe, $sensorEstacionar, $tetoSolar, $chavePresencial, $farolNeblina, '$caminhoArquivo');";
                            
                            $banco->query($query);
                            echo "<div class='containerCU'><h2>Novo carro cadastrado com sucesso</h2>";
                            echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar para tela inicial</a></h4></div>";
                        } else {
                            echo "Erro ao mover o arquivo.";
                        }
                    } else {
                        echo "Nenhum arquivo enviado ou erro no envio.";
                    }
                }
            }
        }
    ?>
</body>
</html>

