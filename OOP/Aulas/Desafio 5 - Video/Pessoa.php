<?php

abstract class Pessoa {

    //—————————— ATRIBUTES ——————————\\
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;



    //—————————— CONSTRUCT ——————————\\
    public function __construct($nm, $id, $sex){
        $this->setNome($nm);
        $this->setIdade($id);
        $this->setSexo($sex);
        $this->setExperiencia(0);
    }



    //—————————— METHODS ——————————\\
    public function ganharExp($var){
        $this->setExperiencia($this->getExperiencia() + $var);
    }




    //—————————— GET / SET ——————————\\
    public function getNome(){
        return $this->nome;
    }
    public function setNome($var){
        $this->nome = $var;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($var){
        $this->idade = $var;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($var){
        $this->sexo = $var;
    }

    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($var){
        $this->experiencia = $var;
    }

}




?>