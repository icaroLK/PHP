<?php

require_once 'Pessoa.php';
Class Usuario extends Pessoa {

    //—————————— ATRIBUTES ——————————\\
    private $login;
    private $totAssistido;




    public function __construct($nm, $id, $sex, $log){
        parent::__construct($nm, $id, $sex);
        $this->setLogin($log);
        $this->setTotAssistido(0);
    }





    //—————————— METHODS ——————————\\
    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }



    //—————————— GET / SET ——————————\\
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($var){
        $this->login = $var;
    }

    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($var){
        $this->totAssistido = $var;
    }

}




?>