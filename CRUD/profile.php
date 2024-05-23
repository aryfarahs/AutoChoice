<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="../js/javascript.js"></script>
    <title>AutoChoice</title>
    <style>
        .vazio {
            text-decoration: none;
            &:hover {
                text-decoration: none;
                background-color: black;
            }
        }

        /* .card2 {
            background-color: red;
        } */

        

        .seesus {
            /* background-color: blue; */
            display: flex;
            flex-direction: row;
            

            overflow-x: scroll;

        }

        .cu {
            border: 1px solid var(--amarelo);
            border-radius: 10px;
            min-width: 120px;
            max-width: 160px;
            width: 30%;
            min-height: 170px;
            max-height: 1000px;
            margin: 10px;
        }



    </style>
</head>
<body>


<?php
    require 'header.php';

?>


    <main>
        <div class="containerProfile ">
            <div class="cabeca">
                <img src="images/profile.png" alt="">
                <h1><?= "{$_SESSION['usuario']}"?></h1>
                <a href="settings.php"><img src="images/settings.png" class="conf2"></a>
            </div>
            <div class="listas">
                <div class="fav">
                    <h3>Favoritos</h3>

                    <div class="seesus">

                    



     <?php

        $email = $_SESSION['email'];



        $id_usuario = $banco->query("select id_usuario from usuario where email = '$email';")->fetch_object()->id_usuario;

    
        $resultado = $banco->query("Select * FROM favoritos AS f
        INNER JOIN usuario AS u ON f.id_usuario = u.id_usuario
        INNER JOIN carro AS c ON f.id_carro = c.id_carro
        WHERE u.id_usuario = $id_usuario;");

        $qtd = $resultado->num_rows;


        for($i = 1; $i <= $qtd; $i++){
            $objAtual = $resultado->fetch_object();

            // echo "<div clas='cu'>";echo "</div>";
            // echo "<div clas='cu'>";echo "</div>";
            // echo "<div clas='cu'>";echo "</div>";
            // echo "<div clas='cu'>";echo "</div>";
            // echo "<div clas='cu'>";echo "</div>";
            // echo "<div clas='cu'>";echo "</div>";
            // echo "<div clas='cu'>";echo "</div>";
            // echo "<div clas='cu'>";echo "</div>";





            // echo "<div class='cu' style='background-image: url(images/carros/$objAtual->id_carro.png); background-repeat: no-repeat ; background-size: contain; background-position: center center'>";

            // echo"<a href='infoCarro.php?id_carro=$objAtual->id_carro' class='cu'>";
            //             echo "<div class='titulo'>";
            //                 echo "<table class='tabelacard'>";
            //                     echo "<tr>";
            //                         echo "<td >";
            //                             echo "{$objAtual->modelo}";
                                        

            //                         echo "</td>";
            //                     echo "</tr>";
            //                 echo "</table>";
            //             echo "</div>";

            //             echo "<div class='fotoCard'>";echo "</div>";
                    
            //         echo"</a>";

            
        }

    ?>
                    

                    </div>



            
                </div>
            
                <div class="hist">
                    <h3>Histórico</h3>
                    <div class="card2">

                    </div>
                    <div class="card2">

                    </div>
                    <div class="card2">

                    </div>
                    <div class="card2">

                    </div>
                </div>
            </div>
        </div>
    
    </main>
    <footer id="footer">
        <h5>Todos os diretos reservados - AutoChoice</h5>
    </footer>
</body>
</html>