<?php
session_start();
require_once('../Config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="UTF-8">
	<title>Scaff :: Painel do Professor</title>
	<link rel="stylesheet" href="../includes/css/index.css">
	<link rel="stylesheet" href="../includes/css/painel.css">
</head>
<?php

$gerarCodigo = new Validacao();

$id = $gerarCodigo->geraCod();


if(isset($_GET['sair'])){
	$sair = null;

	if ($_GET['sair']) {
		session_destroy();
		header('Location: login.php');
	}
}

if(isset($_POST["cadastrar"])){

	$av = new AvaliacaoController();
	$av->cDados();

}
?>
<body>
	<div class="page">
		
		<!-- MODAL -->
		<div class='modal'></div>

			<!-- MODAL-EXCLUIR -->
			<div class='modal-del'>
				<div class='modal-del-header'>
					<p>Tem certeza que deseja excluir sua conta?</p>
				</div>
				<div class='modal-del-footer'>
					<a href="#" class='sim'>Sim</a>
					<a href="#" class='nao'>Não</a>
				</div>
			</div>

			<!-- MODAL-CADASTRAR AV -->
			<div class='modal-login'>
				<div class="form">
					<form action="" method="post">
						<div class="group">
							<input class="fields" name="codAv" readonly value=" <?php echo $id;  ?>" required title="Email" type="text">
							<span class="bar"></span>
						</div>
						<div class="group">
							<input class="fields" name="senha" required title="Senha" type="password">
							<label for="">Senha</label>
							<span class="bar"></span>
						</div>
						<div class="group">
							<input class="fields" name="disciplina" required title="Disciplina" type="text">
							<label for="">Disciplina</label>
							<span class="bar"></span>
						</div>
						<div class="group">
							<button class="bt-signin" name="cadastrar">Cadastrar</button>
						</div>
					</form>
					<div class="alert">Codigo/Senha incorreto(a)</div>
				</div>
			</div>
			<!-- MODAL-LOGIN -->

			<!-- MODAL-SENHA -->
			<div class='modal-pass'>
				<div class="form">
					<form action="">
						<div class="group">
							<input class="fields" name="email" required title="Email" type="password">
							<label for="">Senha Atual</label>
							<span class="bar"></span>
						</div>
						<div class="group">
							<input class="fields" name="senha" required title="Senha" type="password">
							<label for="">Nova Senha</label>
							<span class="bar"></span>
						</div>
						<div class="group">
							<button class="bt-signin">Mudar</button>
						</div>
					</form>
					<div class="alert">Senhas não conferem</div>
				</div>
			</div>
			<!-- MODAL-SENHA -->
		<!-- MODAL -->
	
		<!-- HEADER -->
		<header class="top">
			<div class="inner-top">
				<p class="brand">Scaff</p><div class="logo"></div>
				<div class="links-top">
					<a href="?sair=true">Sair</a>
				</div>
			</div>
		</header>
		<!-- HEADER -->
		
		<!-- WRAP-CONTENT -->
		<div class="wrap-content">
			
			<div class="wrap-photo">
				<div class="photo">
					<img src="../includes/js/holder.js/220x220" alt="">				
				</div>
			</div>

			<div class="message"><p>Bem Vindo, <?php echo $_SESSION["email"];?></p></div>
			
			<div class="line"></div>
			
			<!-- WRAP-OPTIONS -->
			<div class="wrap-options">
				<a href="" class="change-pass" title="Mudar senha">Mudar Senha</a>
				<a href="" class="delete" title="Excluir conta">Excluir Conta</a>
				<a href="" class="login" title="Criar avaliação">Criar avaliação</a>
			</div>
			<!-- WRAP-OPTIONS -->

			<!-- TABLE -->
			<div class="table">
				<table>
					<tr>
						<th>Codigo da avaliação</th>
						<th>Disciplina</th>
						<th>Opções</th>
					</tr>
					<tbody>
					<?php $litarav = new ProfessorDAO();
							$dados = $litarav->ListarAv();
							foreach($dados as $lista):
								echo "<tr>";
								echo "<td>$lista->cod_avaliacao</td>";
								echo "<td>$lista->disciplina</td>";
								echo "<td>";
								?>
								<p><a href="">Cadastrar Questões</a></p>
								<p><a href="">Excluir</a></p>
							<?php
								echo "</td>";
								echo "</tr>";
							endforeach;
					?>
					</tbody>
				</table>
			</div>
			<!-- TABLE -->
		</div>
		<!-- WRAP-CONTENT -->
	</div>
</body>
<script src="../includes/js/holder.js"></script>
<script src="../includes/js/jquery.js"></script>
<script src="../includes/js/scriptLogin.js"></script>
<script src="../includes/js/modal.js"></script>
</html>