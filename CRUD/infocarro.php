<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
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
    <table>
    <td>
        
                <tr><?php echo "Categoria: $objAtual->categoria";?><tr><br>
                <tr><?php echo "Marca: $objAtual->marca";?><tr><br>
                <tr><?php echo "Modelo: $objAtual->modelo";?><tdr<br>
                <tr><?php echo "Motor: $objAtual->motor";?><tr><br>



    </table>



    <?php   
        }

    ?>









</body>
</html>