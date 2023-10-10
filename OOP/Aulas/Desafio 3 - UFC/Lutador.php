<?php

class Lutador{
    
    //---------- ATRIBUTES ----------//
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;
    
    
    
    //---------- CONSTRUCT ----------//
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    
    
    
    //---------- ESPECIAIS ----------//
    public function getNome(): string {
        return $this->nome;
    }

    public function getNacionalidade(): string {
        return $this->nacionalidade;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getAltura(): float {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function getVitorias(): int {
        return $this->vitorias;
    }

    public function getDerrotas(): int {
        return $this->derrotas;
    }

    public function getEmpates(): int {
        return $this->empates;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade(string $nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
        
    }

    

    private function setCategoria() {
        if($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        }else if($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }else if($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        }else if($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        }else {
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias(int $vitorias): void {
        $this->vitorias = $vitorias;
    }
    public function setDerrotas(int $derrotas): void {
        $this->derrotas = $derrotas;
    }
    public function setEmpates(int $empates): void {
        $this->empates = $empates;
    }
    
    
    
    //---------- MÉTODOS ----------//
    
    public function apresentar(){
        echo "<p>------ CHEGOU A HORA LUTADOR ------</p>";
        echo "Lutador: ". $this->getNome();
        echo "<br>Origem: ". $this->getNacionalidade();
        echo "<br>" . $this->getIdade(). " anos";
        echo "<br>".$this->getAltura(). " m de altura";
        echo "<br>Peso: ". $this->getPeso();
        echo "<br>Vitórias: ". $this->getVitorias();
        echo "<br>Derrotas: ". $this->getDerrotas();
        echo "<br>Empates: ". $this->getEmpates();
        echo "<p>----------------------------------</p>";
    }   
    
    public function status(){
        echo "<p>------------- STATUS -------------</p>";
        echo $this->getNome();
        echo " é um peso ". $this->getCategoria();
        echo " com ". $this->getVitorias(). " vitórias, ";
        echo $this->getDerrotas() . " derrotas e ";
        echo $this->getEmpates() . " empates";
        echo "<p>----------------------------------</p>";
    }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }


   


}
