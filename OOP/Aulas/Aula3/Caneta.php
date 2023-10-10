<?php


class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    
    
    // --------- CONSTRUTOR ----------
    
/*    public function __construct(){
        $this->cor = "Azul";
        $this->tampar();
    }
*/

    
    
/*    public function Caneta(){
        $this->cor = "Azul";
        $this->tampar();
   }
*/
    public function __construct($m, $c, $p){
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->tampar();
        
    }
    
 
    
    // --------- MODELO ----------
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($x){
        $this->modelo = $x;
    }
    
    
    
    // --------- MODELO ----------
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cu){
        $this->cor = $cu;
    }
    
    
    
    // --------- PONTA ----------
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($x){
        $this->ponta = $x;
    }
    
    
    
    // --------- TAMPADA ----------
    public function getTampada(){
        return $this->tampada;
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
    
    

    
}
