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
        

    </style>
</head>
<body>
    <?php 
        require 'header.php';
    ?>
    <main>


            <form action="" class="forml">
                <input type="text" name="search" placeholder="O que deseja ver?" class="txt" id="forml">

                <button type="submit" class="search"><img src="images/lupa.png" class="lupa"></button>
            </form> 


        <?php
        
        $resultado = $banco->query(" select * FROM carro;");

        $qtd = $resultado->num_rows;

        echo "<div class='galeria'>";

        for($i = 1; $i <= $qtd; $i++){
            $objAtual = $resultado->fetch_object();

            
                echo "<div class='card' style='background-image: url(images/carros/$objAtual->id_carro.png); background-repeat: no-repeat ; background-size: contain; background-position: center center'>";


                if($_SESSION['tipo'] == 'admin'){

                    echo "<a href='excluir.php?modelo=$objAtual->modelo'><span class='material-symbols-outlined'>close</span></a>";
                }

                    echo "<div class='titulo'>";
                        echo "<table class='tabelacard'>";
                            echo "<tr>";
                                echo "<td >";
                                    echo "{$objAtual->modelo}";

                                echo "</td>";
                            echo "</tr>";
                        echo "</table>";
                    echo "</div>";

                    echo "<div class='fotoCard'>";
                    echo "</div>";
                echo "</div>";
        }

        if($_SESSION['tipo'] == 'admin'){
            echo "<a href='addcarro.php'><div class='card' style='background-image: url(images/carros/plus.png); background-repeat: no-repeat ; background-size: contain; background-position: center center'";

            echo "</div>";
        }

        echo "</div></a>";
        ?>

    </main>
    <footer id="footer">
        <h5>Todos os diretos reservados - AutoChoice</h5>
    </footer>
</body>
</html>