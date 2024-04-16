<?php


$banco = new mysqli("127.0.0.1", "root", "PUC@1234", "AutoChoice");


session_start();


if(!(isset($_SESSION['usuario']))){
    $_SESSION['usuario'] = '';
    $_SESSION['nome'] = '';
    $_SESSION['email'] = '';
    $_SESSION['tipo'] = '';
}





// function logout(){
//     unset($_SESSION['usuario']);
//     unset($_SESSION['nome']);
//     unset($_SESSION['email']);
//     unset($_SESSION['tipo']);
// }
