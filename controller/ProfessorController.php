<?php
require_once('../Config.php');
/*function __autoload($classes){

    include_once("../model/" . $classes . ".php");

}*/

class ProfessorController{


    public function cDados(){


        $usuarioProfessor = new Professor();
        $professorDAO= new ProfessorDAO();

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $opcao = "Professor";


            $usuarioProfessor->setNome($nome);
            $usuarioProfessor->setEmail($email);
            $usuarioProfessor->setSenha($senha);
            $usuarioProfessor->setOpcao($opcao);
            if ($professorDAO->Cadastrar($usuarioProfessor)) {
                echo "Inserido com sucesso";
                header("location: login.php");
            } else {
                echo "Erro ao cadastrar";
            }
        }




}




?>