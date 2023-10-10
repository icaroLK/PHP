<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

Class Livro implements Publicacao{

    //---------- ATRIBUTES ----------//
    private string $titulo;
    private string $autor;
    private int $totPaginas;
    private int $pagAtual;
    private bool $aberto;
    private $leitor;



    //---------- CONSTRUCT ----------//
    public function __construct($tit, $aut, $tot, $leitor){
        $this->titulo = $tit;
        $this->autor = $aut;
        $this->totPaginas = $tot;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;

    //    $this->leitor = $leitor->getNome();

    }



    //---------- METHODS ----------//
    public function detalhes(){
        echo "<p>————————————————————————————————————————————————————————————————</p>";
        echo "<h1>{$this->getTitulo()}</h1>";
        echo "<br>Livro escrito por ". $this->getAutor() . " que contém " . $this->getTotPaginas() . " páginas.";
        
        if($this->getAberto()){
            echo "<br>O leitor {$this->getLeitor()->getNome()} se encontra na página: " . $this->getPagAtual();
        }else{
            echo "<br>O leitor {$this->getLeitor()} ainda não abriu esse livro";
        }
        echo "<p>————————————————————————————————————————————————————————————————</p>";
    }



    public function abrir(){
        if(!($this->getAberto())){
            $this->setAberto(true);
        }else {
            echo "<p>O livro ja está aberto ;)</p>";
        }
    }



    public function fechar(){
        if($this->getAberto()){
            $this->setAberto(false);
        }else{
            echo "<p>O livro ja está fechado ;)</p>";
        }
    }



    public function folhear($p){
        if($p > $this->getTotPaginas()){
            echo "Voce não pode folhear esse número de páginas";
        }else{
            $this->setPagAtual($p);
        }
    }



    public function avançarPag(){
        if($this->getAberto() && $this->getPagAtual() != $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }



    public function voltarPag(){
        if($this->getAberto() && $this->getPagAtual() != 0){
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }




    //---------- GET / SET ----------//
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($var){
        $this->titulo = $var;
    }



    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($var){
        $this->autor = $var;
    }



    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($var){
        $this->totPaginas = $var;
    }



    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($var){
        $this->pagAtual = $var;
    }



    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($var){
        $this->aberto = $var;
    }



    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($var){
        $this->leitor = $var;
    }


}


?>