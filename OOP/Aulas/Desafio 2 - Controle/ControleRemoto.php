<?php

require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    
    //---------- ATRIBUTES ----------//
    private int $volume;
    private bool $ligado;
    private bool $tocando;
    
    
    
    //---------- CONSTRUCT ----------//
    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    
    
    //---------- VOLUME ----------//
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($vol){
        $this->volume = $vol;
    }
    
    
    
    //---------- LIGADO ----------//
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($lig){
        $this->ligado = $lig;
    }
    
    
    
    //---------- TOCANDO ----------//
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($toc){
        $this->tocando = $toc;
    }
    
    
    //--------------------------------//
    //---------- INTERFACES ----------//
    //--------------------------------//

    
    

    //---------- LIGAR ----------//
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    
    
    
    //---------- MENU ----------//
    public function abrirMenu() {
        echo "<br>Está ligado? " . ($this->getLigado()?"Sim":"Não");
        echo "<br>Está tocando? " . ($this->getTocando()?"Sim":"Não");
        echo "<br>Volume: ". $this->getVolume(). "   ";
        for($i=0; $i < $this->getVolume(); $i+=10){
            echo "•";
        }
        echo"<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando menu...";
    }
    
    
    
    //---------- VOLUME ----------//
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 1);
        }
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 1);
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    
    
    
    //---------- PLAY / PAUSE ----------//
    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }


}
