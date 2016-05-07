<?php

class AlunoDAO{

    public function Cadastrar(Aluno $aluno){

        try{


            $sql = "INSERT INTO aluno(nome,email,senha,opcao) VALUES(:nome,:email,:senha,:opcao)";

            $stm = Conexao::getInstance()->prepare($sql);
            $stm->bindValue(":nome", $aluno->getNome());
            $stm->bindValue(":email", $aluno->getEmail());
            $stm->bindValue(":senha", $aluno->getSenha());
            $stm->bindValue(":opcao", $aluno->getOpcao());


            $validar = Conexao::getInstance()->prepare("SELECT * FROM aluno WHERE email=:email");
            $validar->bindValue(":email", $aluno->getEmail(),PDO::PARAM_STR);
            $validar->execute();


            if(preg_match("/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i", $aluno->getEmail())) {
                if($validar->rowCount() == 0){

                    return $stm->execute();

                }else{

                    echo "Email já existente!!";

                }
            }else{

                echo "Informe o email corretamente!!";

            }
        }catch (PDOException $e){

            echo "Ocorreu o seguinte erro".$e;

        }

    }


}
?>