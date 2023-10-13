<?php

require_once 'Pessoa.php';

Class Funcionario extends Pessoa {

    //—————————— ATRIBUTES ——————————\\
    private string $setor;
    private bool $trabalhando;



    //—————————— CONSTRUCT ——————————\\
    public function __construct(){

    }



    //—————————— METHODS ——————————\\
    public function mudarTrabalho($new){
        $this->setSetor($new);
    }




    
    //———————————————————————————————\\
    //—————————— GET / SET ——————————\\
    //———————————————————————————————\\


    //—————————— SETOR ——————————\\
    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($var){
        $this->setor = $var;
    }



    //—————————— TRABALHANDO ——————————\\
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setTrabalhando($var){
        $this->trabalhando = $var;
    }




}




?>