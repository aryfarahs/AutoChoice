<?php
require 'funcoes.php';

function logout() {
    unset($_SESSION['usuario']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['tipo']);
    session_unset();
    session_destroy();
}

logout();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
    <?php if (isset($_GET['timeout']) && $_GET['timeout'] == 'true') { ?>
        // Mensagem de sessão expirada
        Swal.fire({
            icon: 'warning',
            title: 'Sessão Expirada',
            text: 'Sua sessão expirou devido à inatividade.',
            timer: 2000,
        }).then(() => {
            window.location.href = 'login.php';
        });
    <?php } else { ?>
        // Mensagem de logout bem-sucedido
        Swal.fire({
            icon: 'success',
            title: 'Você saiu!',
            timer: 1500,
        }).then(() => {
            window.location.href = 'index.php';
        });
    <?php } ?>
</script>
</body>
</html>

