<?php

    require 'funcoes.php';

    $modelo = $_GET['modelo'];

    $q = "delete from carro where modelo = '$modelo';";

    $banco->query($q);

    header("Location: index.php");

?>



