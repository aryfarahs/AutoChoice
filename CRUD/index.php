<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>AutoChoice</title>
    <style>

    .material-symbols-outlined  {
        margin-top: 140px;
        margin-left: 120px;
        position: absolute;
        &:hover {
            color: black;
            font-weight: bold;
        }
    }

    .closeee {
        color: gray;
        &:hover {
            color: darkgray;
        }
    }



    .head {
        font-size: 1vw;
        width: 33vw;
        right: 3px;
        color: white;
        display: flex;
    }

    a {
        color: white;
    }


</style>
        
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(url) {
        Swal.fire({
            title: "Você tem certeza que deseja excluir? ",
            text: "Você precisará adiciona-lo novamente!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sim, deletar!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
        return false;
    }
</script>

<body>
    <?php 
        require 'header.php';
    ?>
    <main>
    
        <form action="" class="forml">
            <input type="type" name="search" placeholder="O que deseja ver?" class="txt" id="forml">

            <button type="submit" class="search"><img src="images/lupa.png" class="lupa"></button>
        </form> 


        <?php

        if(!isset($_GET['search'])){
        $resultado = $banco->query("select * FROM carro;");

        } else {


            $cu = $_GET['search'];

            $resultado = $banco->query("select *
            FROM carro
            WHERE categoria LIKE '%$cu%'
               OR marca LIKE '%$cu%'
               OR modelo LIKE '%$cu%'
               OR motor LIKE '%$cu%'
               OR potencia LIKE '%$cu%'
               OR qntLugares LIKE '%$cu%'
               OR ano LIKE '%$cu%'
               OR faixaPreco LIKE '%$cu%'
               OR consumoEstrada LIKE '%$cu%'
               OR consumoCidade LIKE '%$cu%'
               OR qntAirbags LIKE '%$cu%'
               OR estepe LIKE '%$cu%'
               OR notaTesteSeguranca LIKE '%$cu%'
               OR appleAndroid LIKE '%$cu%'
               OR transmissao LIKE '%$cu%'
               OR portaMalas LIKE '%$cu%'
               OR altura LIKE '%$cu%'
               OR largura LIKE '%$cu%'
               OR comprimento LIKE '%$cu%'
               OR zeroACem LIKE '%$cu%'
               OR propulsao LIKE '%$cu%'
               OR tracao LIKE '%$cu%'
               OR torque LIKE '%$cu%'
               OR importado LIKE '%$cu%'
               OR cameraRe LIKE '%$cu%'
               OR sensorEstacionar LIKE '%$cu%'
               OR tetoSolar LIKE '%$cu%'
               OR chavePresencial LIKE '%$cu%'
               OR farolNeblina LIKE '%$cu%'
               OR imagem LIKE '%$cu%'");
        }

        $email = $_SESSION['email'];
        $id_usuario = $banco->query("select * from usuario where email = '$email';")->fetch_object()->id_usuario;
    
        $favoritos = $banco->query("Select * FROM favoritos AS f
        INNER JOIN usuario AS u ON f.id_usuario = u.id_usuario
        INNER JOIN carro AS c ON f.id_carro = c.id_carro
        WHERE u.id_usuario = $id_usuario;");

        $qtd = $resultado->num_rows; 
        
        if($qtd == 0){
            echo "<div class='containerCU' style='justify-content: center'><h2>Nenhum resultado encontrado</h2>"; 
            echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar</a></h4></div>";
        } else {

        echo "<div class='galeria'>";

        for($i = 1; $i <= $qtd; $i++){
            $objAtual = $resultado->fetch_object();

                    echo "<div class='card' style='background-image: url($objAtual->imagem); background-repeat: no-repeat ; background-size: contain; background-position: center center'>";

                    if($_SESSION['tipo'] == 'admin'){
                        echo "<a href='excluir.php?modelo=$objAtual->modelo' onclick='return confirmDelete(\"excluir.php?modelo=$objAtual->modelo\")' class='closeee'><span class='material-symbols-outlined'>close</span></a>";
                    }

                    
                    if($favoritos->num_rows == 0) {
                        echo "<a href='favoritar.php?id_carro=$objAtual->id_carro' style='margin-left: -100px;'><span class='material-symbols-outlined' style='color: #808080; font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;'>favorite</span></a>";
                    } else {
                        echo "<a href='favoritar.php?id_carro=$objAtual->id_carro' style='margin-left: -100px;'><span class='material-symbols-outlined' style='color: #ffc000; font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;'>favorite</span></a>";
                    }
                    
                    
                    echo"<a href='infoCarro.php?id_carro=$objAtual->id_carro'>";
                        echo "<div class='titulo'>";
                            echo "<table class='tabelacard'>";
                                echo "<tr>";
                                    echo "<td >";
                                        echo "{$objAtual->modelo}";
                                        

                                    echo "</td>";
                                echo "</tr>";
                            echo "</table>";
                        echo "</div>";

                        echo "<div class='fotoCard'>";echo "</div>";
                    echo "</div>";
                    echo"</a>";
            
        }

        }

        if($_SESSION['tipo'] == 'admin'){
            echo "<a href='addcarro.php'><div class='card' id='infoCarro' style='background-image: url(images/plus.png); background-repeat: no-repeat ; background-size: contain; background-position: center center; margin: auto;'";

            echo "</div>";
        }

        echo "</div></a>";

    


        ?>

    </main>
    <?php
    
        if($_SESSION['tipo'] == 'admin'){
            echo "<footer id='footerIndexADM'>
                    <h5>Todos os diretos reservados - AutoChoice</h5>
                  </footer>";
        } else {
            echo "<footer id='footerIndex'>
                    <h5>Todos os diretos reservados - AutoChoice</h5>
                  </footer>";
        }
    
    ?>
    
</body>
</html>