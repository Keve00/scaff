<?php

class Validacao{


	public function setLogar($email,$senha,$opcao){

		if($opcao=="Aluno") {
			$loga = Conexao::getInstance()->prepare("select * from aluno WHERE email=:email && senha=:senha");
		}else{
			$loga = Conexao::getInstance()->prepare("select * from professor WHERE email=:email && senha=:senha");
		}

		$loga->bindValue(":email",$email);
		$loga->bindValue(":senha",$senha);
		//$loga->execute()
		//$loga->rowCount()>0
		if($loga->execute()){
			if($opcao=="Aluno"){
				session_start();
				$_SESSION['email'] = $email;
				header("Location: painel-aluno.php");
			}else{
				session_start();
				$_SESSION['email'] = $email;
				header("Location: painel-prof.php");
			}
		}else{
			echo "Usuario ou Senha invalidos!!\n";
		}

	}

	public function geraCod( $tamanho = 3, $tamanhosufix = 3){
		// caracteres de cada tipo
		$num = "0123456789";
		$mai = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";


		// VARIAVEIS INTERNAS
		$retorno = "";
		$retorno1 = "";
		$sufix = "";
		$caracteres = "";

		$caracteres .= $num;
		$sufix .= $mai;

		$len = strlen($caracteres);
		$len2 = strlen($sufix);

		for ($i = 1; $i <= $tamanhosufix; $i++) {
			$rand1 = mt_rand(1, $len2);
			$retorno1.= $sufix[$rand1-1];
		}

		for ($n = 1; $n <= $tamanho; $n++){
			$rand = mt_rand(1, $len);
			$retorno .= $caracteres[$rand-1];
		}
		$codigo = "ID-".$retorno.".".$retorno1;


		return $codigo;


	}


}
?>