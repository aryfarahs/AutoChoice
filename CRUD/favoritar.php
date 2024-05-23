<?php

require 'funcoes.php';

// Atribuindo as variáveis
$email = $_SESSION['email'];
$id_usuario = $banco->query("select id_usuario from usuario where email = '$email';")->fetch_object()->id_usuario;
$id_carro = $_GET['id_carro'];


//conferindo se o carro ja foi adicionado
$qtd = $banco->query("select * FROM favoritos AS f
INNER JOIN usuario AS u ON f.id_usuario = u.id_usuario
INNER JOIN carro AS c ON f.id_carro = c.id_carro
WHERE u.id_usuario = $id_usuario
AND c.id_carro = $id_carro;")->num_rows;;

if($qtd != 0){
    //COLOCAR AQUI UM AVISO 'ESSE CARRO JA FOI FAVORITADO'
} else {
    $banco->query("insert into favoritos (id_usuario, id_carro) values ($id_usuario, $id_carro);");
}



header("Location: index.php");




