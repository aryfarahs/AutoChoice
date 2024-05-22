<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style> 
        .tabelaInfo {
            overflow-x: scroll;
            width: 40vw;
        }

        .tabelaInfo table {
            border-collapse: collapse;
        }

        .tabelaInfo td, tr {
            text-align: left;
            padding: 5px;
            border: 1px solid black;
        }
        
        .altern {
            background-color: lightgray;
        }

        .superContainer {
            display: flex;
            padding: 25px;
            justify-content: space-around;
            max-width: 100%;
        }

        .editarCarro {

            width: 35vw;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .butaozao {
            background-color: var(--amarelo);
            padding: 10px;
            border-radius: 5px;
            margin: auto;
            border: 0px;
            color: white;
            margin-top: 30px;
            &:hover {
                background-color: #FFB000;
                cursor: pointer;
            }
        }

        .imagemzinha {
            margin: auto;
            width: 30vw;
            max-width: 300px;
        }


    </style>
    <title>Atributos do Carro</title>
</head>
<body>
    <?php 
        
        require "header.php";

        $oi = $_GET['id_carro'];

        $resultado = $banco->query(" select * FROM carro WHERE id_carro = $oi;");

        $qtd = $resultado->num_rows;


        for($i = 1; $i <= $qtd; $i++){
            $objAtual = $resultado->fetch_object();
    ?>
    <div class="superContainer">
        <div class="editarCarro">
            <img class="imagemzinha" src="images/lupa.png">
            <?php
                if($_SESSION['tipo'] == 'admin'){
                echo "<button class='butaozao'>Editar Veículo</button>";
                }
            ?>
            <h4><a href="index.php" style="color: #4C5154;">Voltar pra tela inicial</a></h4>
        </div>
        <div class="tabelaInfo">
            <table>
                <tr>
                    <td class="altern">Categoria</td>
                    <td><?php echo "$objAtual->categoria";?></td>
                    <td class="altern">Quantidade de Airbags</td>
                    <td><?php echo "$objAtual->qntAirbags";?></td>  
                </tr>
                <tr>
                    <td class="altern">Marca</td>
                    <td><?php echo "$objAtual->marca";?></td>
                    <td class="altern">Estepe</td>
                    <td><?php echo "$objAtual->estepe";?></td>
                </tr>
                <tr>
                    <td class="altern">Modelo</td>
                    <td><?php echo "$objAtual->modelo";?></td>
                    <td class="altern">Nota no Teste de Segurança</td>
                    <td><?php echo "$objAtual->notaTesteSeguranca";?></td>
                </tr>
                <tr>
                    <td class="altern">Motor</td>
                    <td><?php echo "$objAtual->motor";?></td>
                    <td class="altern">Compatibilidade Apple/Android</td>
                    <td><?php if ("$objAtual->appleAndroid" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
                <tr>
                    <td class="altern">Potência</td>
                    <td><?php echo "$objAtual->potencia";?></td>
                    <td class="altern">Transmissão</td>
                    <td><?php echo "$objAtual->transmissao";?></td>
                </tr>
                <tr>
                    <td class="altern">Quantidade de Lugares</td>
                    <td><?php echo "$objAtual->qntLugares";?></td>
                    <td class="altern">Porta-Malas</td>
                    <td><?php echo "$objAtual->portaMalas";?></td>
                </tr>
                <tr>
                    <td class="altern">Ano</td>
                    <td><?php echo "$objAtual->ano";?></td>
                    <td class="altern">Altura</td>
                    <td><?php echo "$objAtual->altura";?></td>
                </tr>
                <tr>
                    <td class="altern">Faixa de Preço</td>
                    <td><?php echo "$objAtual->faixaPreco";?></td>
                    <td class="altern">Largura</td>
                    <td><?php echo "$objAtual->largura";?></td>
                </tr>
                <tr>
                    <td class="altern">Consumo na Estrada</td>
                    <td><?php echo "$objAtual->consumoEstrada";?></td>
                    <td class="altern">Comprimento</td>
                    <td><?php echo "$objAtual->comprimento";?></td>
                </tr>
                <tr>
                    <td class="altern">Consumo na Cidade</td>
                    <td><?php echo "$objAtual->consumoCidade";?></td>
                    <td class="altern">0 a 100 km/h</td>
                    <td><?php echo "$objAtual->zeroACem";?></td>
                </tr>
                <tr>
                    <td class="altern">Propulsão</td>
                    <td><?php echo "$objAtual->propulsao";?></td>
                    <td class="altern">Tração</td>
                    <td><?php echo "$objAtual->tracao";?></td>
                </tr>
                <tr>
                    <td class="altern">Torque</td>
                    <td><?php echo "$objAtual->torque";?></td>
                    <td class="altern">Importado</td>
                    <td><?php if ("$objAtual->importado" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
                    <td class="altern">Câmera de Ré</td>
                    <td><?php if ("$objAtual->cameraRe" == 1){echo "Sim";} else {echo "Não";}?></td>
                    <td class="altern">Sensor de Estacionamento</td>
                    <td><?php if ("$objAtual->sensorEstacionar" == 1){echo "Sim";} else {echo "Não";}?></td>
                <tr>
                    <td class="altern">Teto Solar</td>
                    <td><?php if ("$objAtual->tetoSolar" == 1){echo "Sim";} else {echo "Não";}?></td>
                    <td class="altern">Chave Presencial</td>
                    <td><?php if ("$objAtual->chavePresencial" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
                <tr>
                    <td class="altern">Farol de Neblina</td>
                    <td><?php if ("$objAtual->farolNeblina" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
            </table>
        </div>
    </div>

    <?php   
        }

    ?>
    <footer>
        <h5>Todos os direitos reservados</h5>
    </footer>

</body>
</html>