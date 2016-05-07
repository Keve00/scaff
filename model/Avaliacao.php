<?php

/**
 * Created by PhpStorm.
 * User: Jaelson
 * Date: 13/11/2015
 * Time: 17:23
 */
class Avaliacao
{
    private $codAv;
    private $senha;
    private $disciplina;


//get&set Codigo da Avaliacao
    public function setCodAv($codAv){

        $this->codAv=strval($codAv);

    }

    public function getCodAv(){

        return $this->codAv;

    }
//get&set Senha
    public function setSenha($senha){

        $this->senha=strval($senha);

    }

    public function getSenha(){

        return $this->senha;

    }
//get&set Disciplina
    public function setDisciplina($disciplina){

        $this->disciplina=strval($disciplina);

    }

    public function getDisciplina(){

        return $this->disciplina;

    }

}