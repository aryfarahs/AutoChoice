<?php
require 'funcoes.php';

function logout(){
    unset($_SESSION['usuario']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['tipo']);
    session_unset();
    session_destroy();
};



logout();
header("Location: index.php");