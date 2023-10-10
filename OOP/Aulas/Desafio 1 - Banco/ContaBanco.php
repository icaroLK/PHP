<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    
    
    // --------- CONSTRUTOR ----------
    function __construct($tp){
        $this->status = false;
        $this->saldo = 0;
        $this->tipo = $tp;
    }
    
    
    
    // --------- numConta ----------
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($n){
        $this->numConta = $n;
    }
    
    
    
    // --------- tipo ----------
    private function getTipo(){
        return $this->tipo;
    }
    private function setTipo($t){
        $this->tipo = $t;
    }
    
    
    
    // --------- dono ----------
    private function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    
    
    
    // --------- saldo ----------
    private function getSaldo(){
        return $this->saldo;
    }
    private function setSaldo($s){
        $this->saldo = $s;
    }
    
    
    
    // --------- status ----------
    private function getStatus(){
        return $this->status;
    }
    private function setStatus($s){
        $this->status = $s;
    }
    
    
    
    
    
    // --------- publics ----------
    public function abrirConta(){
        $this->setStatus(true);
        if($this->getTipo() == "CC"){
            $this->setSaldo(50);
            echo "Conta Corrente criada.<br>";
        }else if($this->getTipo() == "CP"){
            $this->setSaldo(150);
            echo "Conta Poupança criada.<br>";
        }
    }
    
    
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "Não é possível fechar a conta com dinheiro no banco. Saldo atual: R$ {$this->getSaldo()}<br>";
        }else if($this->getSaldo() < 0){
            echo "Não é possível fechar a conta estando com o saldo negativo. Saldo atual: R$ {$this->getSaldo()}<br>";
        }else {
            $this->setStatus(false);
            echo "Conta fechada<br>";
        }
    }
    
    
    
    public function depositar($valor){
        $saldo = $this->getSaldo();
        
        $this->setSaldo($saldo += $valor);
        echo "R$ $valor depositados.<br>";
        echo "Saldo atual: R$ $saldo<br>";
    }
    
    
    
    public function sacar($valor){
        $saldo = $this->getSaldo();
        
        if($this->getStatus() == true && $saldo > 0){
            if($saldo < $valor){
                echo "Não é possível sacar um valor maior do que seu saldo atual<br>";
            } else{
                $this->setSaldo($saldo -= $valor);
                echo "Saldo atual: R$ $saldo<br>";
            }
        }
    }
    
    
    
    public function pagarMensal(){
        $saldo = $this->getSaldo();
        
        if($this->getTipo() == "CC"){
            $this->setSaldo($saldo -= 12);
        }else{
            $this->setSaldo($saldo -= 20);
        }
    }
    
}
