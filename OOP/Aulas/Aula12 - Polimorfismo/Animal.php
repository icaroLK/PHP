<?php

abstract class Animal {

    //—————————— ATRIBUTES ——————————\\
    private string $nome;
    private float $peso;
    private int $idade;
    private $membros;



    //—————————— METHODS ——————————\\
    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();



    //—————————— GET / SET ——————————\\
    public function getNome(){
        return $this->nome;
    }
    public function setNome($var){
        $this->nome = $var;
    }


    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($var){
        $this->peso = $var;
    }


    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($var){
        $this->idade = $var;
    }


    public function getMembros(){
        return $this->membros;
    }
    public function setMembros($var){
        $this->membros = $var;
    }


}






?>