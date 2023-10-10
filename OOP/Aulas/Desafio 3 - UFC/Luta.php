<?php

require_once 'Lutador.php';

class Luta {
    
    
    
    //---------- ATRIBUTES ----------//
    private $desafiado;        //aqui é como se fosse uma chave estrangeira, 
                                //ao invés de ser tipo primitivo (caracter, int,
                                // bool...), vou usar um tipo abstrato: faz 
                                // relacação com uma outra classe criata 
                                // anteriormente -> desafiado vai ser uma 
                                // instancia(objeto) da classe Lutador
                                // CRIO UMA RELACÇÃO ENTRE O TIPO ABSTRATO E A 
                                // INSTANCIA DE UMA CLASSE
    private $desafiante;
    private int $rounds;
    private bool $aprovada;
    
    
    
    //---------- CONSTRUCT ----------//
    
 
    
    
    
    //---------- GET / SET ----------//
    public function setDesafiado($dd){
        $this->desafiado = $dd;
    }
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    
    
    
    
    
    
    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds(): int {
        return $this->rounds;
    }

    public function getAprovada(): bool {
        return $this->aprovada;
    }


    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds(int $rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada(bool $aprovada): void {
        $this->aprovada = $aprovada;
    }

    
    
    
    
    // $A->getCategoria() != "Inválido" && $B->getCategoria() != "Inválido"
    //---------- MÉTODOS ----------//
    
    public function marcarLuta($A, $B){
        if($A->getCategoria() == $B->getCategoria() && $A != $B){
            $this->aprovada = true;
            $this->desafiante = $A;
            $this->desafiado = $B; 
        }else{
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado = null;
        }
    }
    
    
    public function lutar(){
        if($this->aprovada){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vence = mt_rand(0, 2);
            switch($vence){
                case 0:
                    echo "Luta empatada";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                
                
                case 1:
                    echo "Lutador {$this->desafiante->getNome()} vence";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                    
                    
                case 2:
                    echo "Lutador {$this->desafiado->getNome()} vence";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    break;
                    
                    
            }
            
            
        }else{
            echo "Luta não pode acontecer";
        }
        
    }
    
}
