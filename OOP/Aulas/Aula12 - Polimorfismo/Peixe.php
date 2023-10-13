<?php

require_once 'Animal.php';
Class Peixe extends Animal{
    //—————————— ATRIBUTES ——————————\\
    private string $corEscama;



    //—————————— METHODS ——————————\\

    public function locomover(){
        echo "<br>{$this->getNome()} está nadando";
    }
    public function alimentar(){
        echo "<br>{$this->getNome()} está comendo";
    }
    public function emitirSom(){
        echo "<br>Peixe não faz som";
    }
    public function soltarBolha(){
        echo "<br>🫧";
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