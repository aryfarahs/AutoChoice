<?php

$banco = new mysqli("127.0.0.1", "root", "puc@1234", "AutoChoice");


session_start();



if(!(isset($_SESSION['usuario']))){
    $_SESSION['usuario'] = '';
    $_SESSION['nome'] = '';
    $_SESSION['email'] = '';
    $_SESSION['tipo'] = '';
}


