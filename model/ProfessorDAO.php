<?php

/**
 * Created by PhpStorm.
 * User: lab2-33
 * Date: 16/11/2015
 * Time: 11:31
 */
class ProfessorDAO
{

    public function Cadastrar(Professor $professor){

        try{
            $sql = "INSERT INTO professor(nome,email,senha,opcao) VALUES(:nome,:email,:senha,:opcao)";

            $stm = Conexao::getInstance()->prepare($sql);
            $stm->bindValue(":nome", $professor->getNome());
            $stm->bindValue(":email", $professor->getEmail());
            $stm->bindValue(":senha", $professor->getSenha());
            $stm->bindValue(":opcao", $professor->getOpcao());

            $validar = Conexao::getInstance()->prepare("SELECT * FROM professor WHERE email=:email");
            $validar->bindValue(":email", $professor->getEmail(),PDO::PARAM_STR);
            $validar->execute();

            if(preg_match("/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i", $professor->getEmail())) {

                if($validar->rowCount() == 0){

                    return $stm->execute();

                }else{

                    echo "Email j� existente!!";

                }
            }else{

                echo "Informe o email corretamente!!";

            }

        }catch (PDOException $e){

            echo "Ocorreu o seguinte erro".$e;

        }

    }
    public function ListarAv(){

        try{

        $idProf = Conexao::getInstance()->prepare("SELECT id_professor FROM professor WHERE email=:email");
        $idProf->bindValue(":email", $_SESSION["email"]);


        $sql = "SELECT cod_avaliacao,disciplina FROM avaliacao WHERE id_professor=:id_professor";
        $stm = Conexao::getInstance()->prepare($sql);
        $stm->bindValue(":id_professor", $idProf->execute());
        $stm->execute();
        $dados = $stm->fetchAll(PDO::FETCH_OBJ);
        return $dados;
            
        }catch(PDOException $e){

            echo "Ocorreu o seguinte erro".$e;

        }


    }
}