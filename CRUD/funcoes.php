<?php
// Conecte ao banco de dados
$banco = new mysqli("127.0.0.1", "root", "PUC@1234", "AutoChoice");

// Verifique se a conexão foi bem-sucedida
if ($banco->connect_error) {
    die("Connection failed: " . $banco->connect_error);
}

session_start();

// Verificar se o usuário está logado
if (!(isset($_SESSION['usuario']))) {
    $_SESSION['usuario'] = '';
    $_SESSION['nome'] = '';
    $_SESSION['email'] = '';
    $_SESSION['tipo'] = '';
} 
$session_timeout = 300;

// Verificar se o usuário está logado
if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != '') {
    // Verificar se a função já foi declarada
    if (!function_exists('checkSessionTimeout')) {
        function checkSessionTimeout() {
            global $session_timeout;

            if (isset($_SESSION['last_activity'])) {
                $inactive_time = time() - $_SESSION['last_activity'];

                if ($inactive_time >= $session_timeout) {
                    session_unset();
                    session_destroy();
                    // Use um buffer de saída para evitar erros com header
                    ob_start();
                    header("Location: logout.php?timeout=true");
                    ob_end_flush();
                    exit();
                }
            }

            $_SESSION['last_activity'] = time();
        }
    }

    // Chame a função checkSessionTimeout apenas se o usuário estiver logado
    checkSessionTimeout();
}
?>



