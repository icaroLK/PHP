<?php

Class Pessoa{


    //---------- ATRIBUTES ----------//
    private string $nome;
    private int $idade;
    private string $sexo;



    //---------- CONSTRUCT ----------//
    public function __construct($n, $i, $s){
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);

    }



    //---------- METHODS ----------//
    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }



    //---------- ESPECIAIS ----------//
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }


    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }


    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($s){
        $this->sexo = $s;
    }











}




?>