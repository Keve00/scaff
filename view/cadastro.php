<!DOCTYPE html>
<?php
require_once('../Config.php');
/*
include_once("../controller/AlunoController.php");
include_once("../controller/ProfessorController.php");
*/
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Scaff > Cadastro</title>
	<link rel="stylesheet" href="../includes/css/login.css">
	<link rel="stylesheet" href="../includes/css/cadastro.css">
</head>
<?php

$aController = new AlunoController();
$pController = new ProfessorController();

if(isset($_POST["cadastro"])){

	if (isset($_POST["opcao"])) {
		$pController->cDados();
	} else {
		$aController->cDados();
	}

}

?>
<body>
	<div class="pag">
		<div class="logo">
			<p><a href="../index.html">Scaff</a></p>
		</div>
		<div class="form">

			<form action="" method="post">
				<div class="group">
					<input title="Nome" required name="nome" class="fields" type="text">
					<label for="">Nome</label>
					<span class="bar"></span>
				</div>
				<div class="group">
					<input title="Email" required name="email" class="fields" type="text">
					<label for="">Email</label>
					<span class="bar"></span>
				</div>
				<div class="group">
					<input title="Senha"  required name="senha" class="fields" type="password">
					<label for="">Senha</label>
					<span class="bar"></span>
				</div>
				<div class="group">
					<input id="prof" name="opcao" type="checkbox"><span class="legend">Sou Professor</span>	
				</div>
				<div class="group">
					<button class="bt-signin" name="cadastro" type="submit">Cadastrar</button>
				</div>
			</form>
			<div class="alert">Login/Senha incorreto(a)</div>
			<div class="success">Cadastrado com sucesso</div>
		</div>
		<footer class="footer">
			<p>Scaff &copy 2015</p>
		</footer>
		</div>
</body>
<script src="../includes/js/jquery.js"></script>
<script src="../includes/js/scriptLogin.js"></script>
</html>