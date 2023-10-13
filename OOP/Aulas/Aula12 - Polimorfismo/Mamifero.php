<?php


require_once 'Animal.php';
Class Mamifero extends Animal {

    //—————————— ATRIBUTES ——————————\\
    private $corPelo;



    //—————————— METHODS ——————————\\

    public function locomover(){
        echo "<br>{$this->getNome()} está correndo";
    }
    public function alimentar(){
        echo "<br>{$this->getNome()} está mamando";
    }
    public function emitirSom(){
        echo "<br>Som do mamífero {$this->getNome()}";
    }



    //—————————— GET / SET ——————————\\
    public function getCorPelo(){
        return $this->corPelo;
    }
    
    public function setCorPelo($var){
        $this->corPelo = $var;
    }








}








?>