<?php
header("charset=UTF-8");
/**
 * Created by PhpStorm.
 * User: Jaelson
 * Date: 13/11/2015
 * Time: 17:23
 */
class AvaliacaoDAO
{

    public function Cadastrar(Avaliacao $av){

        try{
            $idProf = Conexao::getInstance()->prepare("SELECT id_professor FROM professor WHERE email=:email");
            $idProf->bindValue(":email", $_SESSION["email"]);

            $sql = "INSERT INTO avaliacao(id_professor,cod_avaliacao,senha,disciplina) VALUES(:id_professor,:cod_avaliacao,:senha,:disciplina)";

            $stm = Conexao::getInstance()->prepare($sql);
            $stm->bindValue(":id_professor", $idProf->execute());
            $stm->bindValue(":cod_avaliacao", $av->getCodAv());
            $stm->bindValue(":senha", $av->getSenha());
            $stm->bindValue(":disciplina", $av->getDisciplina());


            $validar = Conexao::getInstance()->prepare("SELECT cod_avaliacao FROM avaliacao WHERE cod_avaliacao=:cod_avaliacao");
            $validar->bindValue(":cod_avaliacao", $av->getCodAv());
            $validar->execute();

            if($validar->rowCount()==0){
                return $stm->execute();
              
            }else{
                echo "Cod Já inserido!!\n";
            }




        }catch (PDOException $e){

            echo "Ocorreu o seguinte erro".$e->getMessage();

        }

    }

}