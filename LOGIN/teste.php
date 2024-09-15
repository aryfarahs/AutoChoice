<?php
// Verifica se o formulário de login foi enviado
if(isset($_POST['login'])) {
    // Conexão com o banco de dados
    $conexao = mysqli_connect("127.0.0.1:3307", "root", "PUC@1234", "autochoice");

    // Verifica se a conexão foi estabelecida com sucesso
    if($conexao === false) {
        die("Erro de conexão: " . mysqli_connect_error());
    }

    // Obtém os dados do formulário
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Consulta SQL para verificar se o usuário existe
    $query = "SELECT * FROM usuarios WHERE email = '$email'";

    // Executa a consulta
    $result = mysqli_query($conexao, $query);

    // Verifica se a consulta retornou algum resultado
    if(mysqli_num_rows($result) == 1) {
        // Verifica a senha
        $row = mysqli_fetch_assoc($result);
        if(password_verify($senha, $row['senha_hash'])) {
            // Senha correta, usuário autenticado com sucesso
            // Redireciona para a página index.html
            header("Location: ../MAIN/html/index.html");
            echo "Logado";
            exit; // Garante que o código não continue a ser executado após o redirecionamento
        } else {
            // Senha incorreta
            echo "Senha incorreta";
        }
    } else {
        // Usuário não encontrado
        echo "Usuário não encontrado";
    }

    // Fecha a conexão
    mysqli_close($conexao);
}
?>
