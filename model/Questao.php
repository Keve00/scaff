<?php

/**
 * Created by PhpStorm.
 * User: Jaelson
 * Date: 13/11/2015
 * Time: 16:42
 */
class Questao
{
    private $enunciado;

//get&set Enunciado
    public function setEnunciado($enunciado){

        $this->enunciado=$enunciado;

    }

    public function getEnunciado(){

        return $this->enunciado;

    }
}