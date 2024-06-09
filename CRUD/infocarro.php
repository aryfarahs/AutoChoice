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
            box-shadow: 0px 0px 10px 4px lightgray;
        }

        .tabelaInfo table {
            border-collapse: collapse;
        }

        .tabelaInfo td, tr {
            text-align: left;
            padding: 5px;
            border: 1px solid black;
            &:hover {
                background-color: #ffc01d;
                color: #121517;
            }
        }
        
        .title {
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
                background-color: #ffdc74;;
                cursor: pointer;
            }
        }

        .imagemzinha {
            margin: auto;
            min-width: 10vw;
            max-width: 30vw;
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
            <img class="imagemzinha" src="<?=$objAtual->imagem?>">
            <?php

            if($_SESSION['tipo'] == 'admin'){
            echo "<a href='editarcarro.php?id_carro=" . $objAtual->id_carro . "' class='butaozao'>Editar Veículo</a>";
            }
            ?>
            <h4><a href="index.php" style="color: #4C5154;">Voltar pra tela inicial</a></h4>
        </div>
        <div class="tabelaInfo">
            <table>
                <tr class="title">
                    <td style="font-weight: 900;">Categoria</td>
                    <td><?php echo "$objAtual->categoria";?></td>
                    <td style="font-weight: 900;">Quantidade de Airbags</td>
                    <td><?php echo "$objAtual->qntAirbags";?></td>  
                </tr>
                <tr>
                    <td style="font-weight: 900;">Marca</td>
                    <td><?php echo "$objAtual->marca";?></td>
                    <td style="font-weight: 900;">Estepe</td>
                    <td><?php echo "$objAtual->estepe";?></td>
                </tr>
                <tr class="title">
                    <td style="font-weight: 900;">Modelo</td>
                    <td><?php echo "$objAtual->modelo";?></td>
                    <td style="font-weight: 900;">Nota no Teste de Segurança</td>
                    <td><?php echo "$objAtual->notaTesteSeguranca";?></td>
                </tr>
                <tr>
                    <td style="font-weight: 900;">Motor</td>
                    <td><?php echo "$objAtual->motor";?></td>
                    <td style="font-weight: 900;">Compatibilidade Apple/Android</td>
                    <td><?php if ("$objAtual->appleAndroid" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
                <tr class="title">
                    <td style="font-weight: 900;">Potência</td>
                    <td><?php echo "$objAtual->potencia";?></td>
                    <td style="font-weight: 900;">Transmissão</td>
                    <td><?php echo "$objAtual->transmissao";?></td>
                </tr>
                <tr>
                    <td style="font-weight: 900;">Quantidade de Lugares</td>
                    <td><?php echo "$objAtual->qntLugares";?></td>
                    <td style="font-weight: 900;">Porta-Malas</td>
                    <td><?php echo "$objAtual->portaMalas";?></td>
                </tr>
                <tr class="title">
                    <td style="font-weight: 900;">Ano</td>
                    <td><?php echo "$objAtual->ano";?></td>
                    <td style="font-weight: 900;">Altura</td>
                    <td><?php echo "$objAtual->altura";?></td>
                </tr>
                <tr>
                    <td style="font-weight: 900;">Faixa de Preço</td>
                    <td><?php echo "$objAtual->faixaPreco";?></td>
                    <td style="font-weight: 900;">Largura</td>
                    <td><?php echo "$objAtual->largura";?></td>
                </tr>
                <tr class="title">
                    <td style="font-weight: 900;">Consumo na Estrada</td>
                    <td><?php echo "$objAtual->consumoEstrada";?></td>
                    <td style="font-weight: 900;">Comprimento</td>
                    <td><?php echo "$objAtual->comprimento";?></td>
                </tr>
                <tr>
                    <td style="font-weight: 900;">Consumo na Cidade</td>
                    <td><?php echo "$objAtual->consumoCidade";?></td>
                    <td style="font-weight: 900;">0 a 100 km/h</td>
                    <td><?php echo "$objAtual->zeroACem";?></td>
                </tr>
                <tr class="title">
                    <td style="font-weight: 900;">Propulsão</td>
                    <td><?php echo "$objAtual->propulsao";?></td>
                    <td style="font-weight: 900;">Tração</td>
                    <td><?php echo "$objAtual->tracao";?></td>
                </tr>
                <tr>
                    <td style="font-weight: 900;">Torque</td>
                    <td><?php echo "$objAtual->torque";?></td>
                    <td style="font-weight: 900;">Importado</td>
                    <td><?php if ("$objAtual->importado" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
                <tr class="title">
                    <td style="font-weight: 900;">Câmera de Ré</td>
                    <td><?php if ("$objAtual->cameraRe" == 1){echo "Sim";} else {echo "Não";}?></td>
                    <td style="font-weight: 900;">Sensor de Estacionamento</td>
                    <td><?php if ("$objAtual->sensorEstacionar" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
                <tr>
                    <td style="font-weight: 900;">Teto Solar</td>
                    <td><?php if ("$objAtual->tetoSolar" == 1){echo "Sim";} else {echo "Não";}?></td>
                    <td style="font-weight: 900;">Chave Presencial</td>
                    <td><?php if ("$objAtual->chavePresencial" == 1){echo "Sim";} else {echo "Não";}?></td>
                </tr>
                <tr class="title">
                    <td style="font-weight: 900;">Farol de Neblina</td>
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