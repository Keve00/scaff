<?php

/**
 * Created by PhpStorm.
 * User: Jaelson
 * Date: 13/11/2015
 * Time: 16:42
 */
class Alternativa
{
    private $enunciado;
    private $status;

//get&set Enunciado
    public function setEnunciado($enunciado){

        $this->enunciado=strtolower($enunciado);

    }

    public function getEnunciado(){

        return $this->enunciado;

    }
//get&set Status
    public function setStatus($status){

        $this->status=$status;

    }

    public function getStatus(){

        return $this->status;

    }

}