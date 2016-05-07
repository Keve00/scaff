<?php

/**
 * Created by PhpStorm.
 * User: Jaelson
 * Date: 17/11/2015
 * Time: 21:13
 */
class AvaliacaoController
{
    public function cDados(){

        $av = new Avaliacao();
        $avDAO = new AvaliacaoDAO();

        $senha = $_POST["senha"];
        $disciplina = $_POST["disciplina"];
        $cod_av = $_POST["codAv"];


        $av->setDisciplina($disciplina);
        $av->setSenha($senha);
        $av->setCodAv($cod_av);

        if ($avDAO->Cadastrar($av)) {
            echo "Inserido com sucesso";
        }else {
            echo "Erro ao cadastrar";
        }

    }
}