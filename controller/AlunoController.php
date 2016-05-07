<?php
require_once('../Config.php');
/*function __autoload($classes){

    include_once("../model/" . $classes . ".php");

}*/

class AlunoController{


    public function cDados(){

    $usuarioAluno = new Aluno();
    $alunoDAO = new AlunoDAO();

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $opcao = "Aluno";

            $usuarioAluno->setNome($nome);
            $usuarioAluno->setEmail($email);
            $usuarioAluno->setSenha($senha);
            $usuarioAluno->setOpcao($opcao);

        if ($alunoDAO->Cadastrar($usuarioAluno)) {
            echo "Inserido com sucesso";
            header("location: login.php");
        }else {
            echo "Erro ao cadastrar";
         }

    }




}




?>