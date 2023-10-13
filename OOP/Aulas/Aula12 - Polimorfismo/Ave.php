<?php

require_once 'Animal.php';
Class Ave extends Animal{
    //—————————— ATRIBUTES ——————————\\
    private string $corPena;



    //—————————— METHODS ——————————\\

    public function locomover(){
        echo "<br>{$this->getNome()} está voando";
    }
    public function alimentar(){
        echo "<br>{$this->getNome()} está comendo";
    }
    public function emitirSom(){
        echo "<br>Som da ave {$this->getNome()}";
    }
    public function fazerNinho(){
        echo "<br>Ninho feito";
    }



    //—————————— GET / SET ——————————\\
    public function getCorPena(){
        return $this->corPena;
    }
    
    public function setCorPena($var){
        $this->corPena = $var;
    }


}







?>