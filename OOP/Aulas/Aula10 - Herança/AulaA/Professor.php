<?php

require_once 'Pessoa.php';

Class Professor extends Pessoa {

    //—————————— ATRIBUTES ——————————\\
    private string $especialidade;
    private float $salario;



    //—————————— CONSTRUCT ——————————\\
    public function __construct(){

    }



    //—————————— METHODS ——————————\\
    public function receberAum($aum){
        $this->setSalario($this->getSalario() + $aum);
    }




    //———————————————————————————————\\
    //—————————— GET / SET ——————————\\
    //———————————————————————————————\\


    //—————————— ESPEC ——————————\\
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($var){
        $this->especialidade = $var;
    }



    //—————————— SALARIO ——————————\\
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($var){
        $this->salario = $var;
    }


}




?>