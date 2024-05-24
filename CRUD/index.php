<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>AutoChoice</title>
    <style>

    .material-symbols-outlined {
        margin-top: 140px;
        margin-left: 120px;
        position: absolute;
        color: grey;

        &:hover {
            color: black;
            font-weight: bold;
            /* background-color: red; */
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

    .favoritooo{
        margin-left: -100px;
    }

</style>
        

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
        $resultado = $banco->query(" select * FROM carro;");

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
               OR farolNeblina LIKE '%$cu%'");
        }

        $qtd = $resultado->num_rows;

        if($qtd == 0){
            echo "<div class='containerCU' style='justify-content: center'><h2>Nenhum resultado encontrado</h2>"; 
            echo "<h4 class='volta'><a href='index.php' style='color: #4C5154'>Voltar</a></h4></div>";
        } else {

        

        echo "<div class='galeria'>";

        for($i = 1; $i <= $qtd; $i++){
            $objAtual = $resultado->fetch_object();

                    echo "<div class='card' style='background-image: url(images/carros/$objAtual->id_carro.png); background-repeat: no-repeat ; background-size: contain; background-position: center center'>";

                    if($_SESSION['tipo'] == 'admin'){
                        echo "<a href='excluir.php?modelo=$objAtual->modelo' onclick='return confirmDelete(\"excluir.php?modelo=$objAtual->modelo\")'><span class='material-symbols-outlined'>close</span></a>";
                    }
                    echo "<a href='favoritar.php?id_carro=$objAtual->id_carro' class='favoritooo'><span class='material-symbols-outlined'>favorite</span></a>";

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
            echo "<a href='addcarro.php'><div class='card' id='infoCarro' style='background-image: url(images/carros/plus.png); background-repeat: no-repeat ; background-size: contain; background-position: center center'";

            echo "</div>";
        }

        echo "</div></a>";

    


        ?>

    </main>
    <footer>
        <h5>Todos os diretos reservados - AutoChoice</h5>
    </footer>
</body>
</html>