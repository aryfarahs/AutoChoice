<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>AutoChoice</title>
</head>
<body>
    <img src="../MAIN/images/blogo.png" style="width: 12vw; min-width: 150px; margin: 10px; padding: 0;">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../MAIN/html/index.html" method="POST">
			<h1>Cadastre-se</h1>
			<span>ou use o email para se cadastrar</span>
			<input type="text" name="nome" placeholder="Nome" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="senha" placeholder="Senha" />
			<button type="submit" name="cadastrar">Cadastrar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<h1>Login</h1>
			<span>ou use sua conta</span>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="senha" placeholder="Senha" />
			<a href="#">Esqueceu sua senha?</a>
			<button type="submit" name="login">Entrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem Vindo de Volta!</h1>
				<p>Para manter-se conectado, por favor entre com suas informações pessoais </p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá, Amigo!</h1>
				<p>Cadastre-se conosco e vamos trilhar uma jornada juntos!</p>
				<button class="ghost" id="signUp">Cadastrar-se</button>
			</div>
		</div>
	</div>
</div>
</body>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</html>
