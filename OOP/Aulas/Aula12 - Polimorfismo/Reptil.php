<?php

require_once 'Animal.php';
Class Reptil extends Animal{
    //—————————— ATRIBUTES ——————————\\
    private string $corEscama;



    //—————————— METHODS ——————————\\

    public function locomover(){
        echo "<br>{$this->getNome()} está rastejando";
    }
    public function alimentar(){
        echo "<br>{$this->getNome()} está comendo";
    }
    public function emitirSom(){
        echo "<br>Som do réptil {$this->getNome()}";
    }



    //—————————— GET / SET ——————————\\
    public function getCorEscama(){
        return $this->corEscama;
    }
    
    public function setCorEscama($var){
        $this->corEscama = $var;
    }


}







?>