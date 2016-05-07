<!DOCTYPE html>

<?php
require_once('../Config.php');
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Scaff > Login</title>
	<link rel="stylesheet" href="../includes/css/login.css">
</head>
<?php

$valida = new Validacao();

if(isset($_POST["logar"])){

	$email = $_POST["email"];
	$senha = $_POST["senha"];
	if(isset($_POST["opcao"])){
		$opcao = "Professor";
	}else{
		$opcao = "Aluno";
	}
	$teste = $valida->setLogar($email,$senha,$opcao);

}

?>
<body>
	<div class="page">
		<div class="logo">
			<p><a href="../index.html">Scaff</a></p>
		</div>
		<div class="form">
			<form action="" method="post">
				<div class="group">
					<input class="fields" name="email" required title="Email" type="text">
					<label for="">Email</label>
					<span class="bar"></span>
				</div>
				<div class="group">
					<input class="fields" name="senha" required title="Senha" type="password">
					<label for="">Senha</label>
					<span class="bar"></span>
				</div>
				<div class="group">
					<input id="prof " name="opcao" value="Professor" type="checkbox"><span class="legend">Sou Professor</span>
				</div>
				<p class="forgot">
					<a href="#">Esqueceu alguma coisa?</a>
				</p>
				<div class="group">
					<button name="logar" type="submit" class="bt-signin">Entrar</button>
				</div>
			</form>
			<div class="alert">Login/Senha incorreto(a)</div>
		</div>
		<footer class="footer">
			<p>Scaff &copy 2015</p>
		</footer>
	</div>
</body>
<script src="../includes/js/jquery.js"></script>
<script src="../includes/js/scriptLogin.js"></script>
</html>
