<?php

    require 'funcoes.php';

    $modelo = $_GET['modelo'];

    // $q1 = "delete from carro where modelo = '$modelo';";
    // $banco->query($q);
    // header("Location: index.php");

    $banco->begin_transaction();

    try {
        $q = "DELETE FROM carro WHERE modelo = '$modelo';";
        $banco->query($q);

        $banco->commit();


        header("Location: index.php");

    } catch (Exception $e) {
        // Reverter a transação em caso de erro
        $banco->rollback();
        echo "Erro ao deletar: " . $e->getMessage();
    }


?>



