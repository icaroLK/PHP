<?php

abstract Class Pessoa {

    //—————————— ATRIBUTES ——————————\\
    private string $nome;
    private int $idade;
    private string $sexo;



    //—————————— CONSTRUCT ——————————\\
    public function __construct(){
 
    }



    //—————————— METHODS ——————————\\
    public final function fazerAniv(){
        $this->setIdade($this->getIdade() + 1);
    }




    //———————————————————————————————\\
    //—————————— GET / SET ——————————\\
    //———————————————————————————————\\


    //—————————— NOME ——————————\\
    public function getNome(){
        return $this->nome;
    }
    public function setNome($var){
        $this->nome = $var;
    }



    //—————————— IDADE ——————————\\
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($var){
        $this->idade = $var;
    }



    //—————————— SEXO ——————————\\
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($var){
        $this->sexo = $var;
    }
}


?>