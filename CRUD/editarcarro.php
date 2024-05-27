<?php
require 'header.php';

if ($_SESSION['tipo'] != 'admin') {
    echo "Você não tem acesso a essa página";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pega os dados do formulário
    $imagem = $_POST["imagem"];
    $id_carro = $_POST['id_carro'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $motor = $_POST['motor'];
    $potencia = $_POST['potencia'];
    $qntLugares = $_POST['qntLugares'];
    $ano = $_POST['ano'];
    $faixaPreco = $_POST['faixaPreco'];
    $consumoEstrada = $_POST['consumoEstrada'];
    $consumoCidade = $_POST['consumoCidade'];
    $qntAirbags = $_POST['qntAirbags'];
    $estepe = $_POST['estepe'];
    $notaTesteSeguranca = $_POST['notaTesteSeguranca'];
    $appleAndroid = $_POST['appleAndroid'];
    $transmissao = $_POST['transmissao'];
    $portaMalas = $_POST['portaMalas'];
    $altura = $_POST['altura'];
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $zeroACem = $_POST['zeroACem'];
    $propulsao = $_POST['propulsao'];
    $tracao = $_POST['tracao'];
    $torque = $_POST['torque'];
    $importado = $_POST['importado'];
    $cameraRe = $_POST['cameraRe'];
    $sensorEstacionar = $_POST['sensorEstacionar'];
    $tetoSolar = $_POST['tetoSolar'];
    $chavePresencial = $_POST['chavePresencial'];
    $farolNeblina = $_POST['farolNeblina'];

    // Atualiza o banco de dados
    $query = "UPDATE Carro SET 
        imagem='$_imagem',
        categoria='$categoria', 
        marca='$marca', 
        modelo='$modelo', 
        motor='$motor', 
        potencia='$potencia', 
        qntLugares='$qntLugares', 
        ano='$ano', 
        faixaPreco='$faixaPreco', 
        consumoEstrada='$consumoEstrada', 
        consumoCidade='$consumoCidade', 
        qntAirbags='$qntAirbags', 
        estepe='$estepe', 
        notaTesteSeguranca='$notaTesteSeguranca', 
        appleAndroid='$appleAndroid', 
        transmissao='$transmissao', 
        portaMalas='$portaMalas', 
        altura='$altura', 
        largura='$largura', 
        comprimento='$comprimento', 
        zeroACem='$zeroACem', 
        propulsao='$propulsao', 
        tracao='$tracao', 
        torque='$torque', 
        importado='$importado', 
        cameraRe='$cameraRe', 
        sensorEstacionar='$sensorEstacionar', 
        tetoSolar='$tetoSolar', 
        chavePresencial='$chavePresencial', 
        farolNeblina='$farolNeblina' 
        WHERE id_carro='$id_carro'";

    if ($banco->query($query)) {
        echo "<div class='containerCU'><h2>Carro atualizado com sucesso</h2>";
        echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar para tela inicial</a></h4></div>";
    } else {
        echo "<div class='containerCU'><h2>Erro ao atualizar o carro: " . $banco->error . "</h2>";
        echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar para tela inicial</a></h4></div>";
    }
} else {
    // Exibe o formulário preenchido para edição
    $id_carro = $_GET['id_carro'] ?? null;

    if ($id_carro) {
        $query = "SELECT * FROM Carro WHERE id_carro = $id_carro";
        $result = $banco->query($query);

        if ($result->num_rows > 0) {
            $carro = $result->fetch_object();
            require 'editcarro-form.php';
        } else {
            echo "<div class='containerCU'><h2>Carro não encontrado</h2>";
            echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar para tela inicial</a></h4></div>";
        }
    } else {
        echo "<div class='containerCU'><h2>ID do carro não especificado</h2>";
        echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar para tela inicial</a></h4></div>";
    }
}
?>
</body>
</html>
