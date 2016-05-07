<?php

class Aluno{

private $nome;
private $senha;
private $email;
private $opcao;


//get&set Nome
public function setNome($nome){
	
	$this->nome=strtolower($nome);

}

public function getNome(){
	
	return $this->nome;

}
//get&set Senha
public function setSenha($senha){
	
	$this->senha=strtolower($senha);

}

public function getSenha(){
	
	return $this->senha;

}
//get&set Email
public function setEmail($email){
	
	$this->email=strtolower($email);

}

public function getEmail(){
	
	return $this->email;

}
//get&set Opcao
public function setOpcao($opcao){
	
	$this->opcao=strtolower($opcao);

}

public function getOpcao(){
	
	return $this->opcao;

}


}
?>