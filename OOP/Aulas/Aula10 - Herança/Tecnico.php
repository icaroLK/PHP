<?php

require_once 'Aluno.php';

Class Tecnico extends Aluno {

    //—————————— ATRIBUTES ——————————\\
    private $registroProfissional;



    //—————————— CONSTRUCT ——————————\\
    public function __construct(){
        
    }



    //—————————— METHODS ——————————\\
    public function praticar(){

    }




    //————————————————————————————\\
    //—————————— GET / SET ——————————\\
    //——————————————————————————————\\

    //—————————— Registro Profissional ——————————\\
    public function getRegistroProfissional(){
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($var){
        $this->registroProfissional = $var;
    }

}



?>