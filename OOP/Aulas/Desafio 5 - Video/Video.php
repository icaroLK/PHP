<?php

require_once 'AcoesVideo.php';

Class Video implements AcoesVideo{

    //—————————— CONSTRUCT ——————————\\
    private string $titulo;
//    private $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;



    //—————————— CONSTRUCT ——————————\\
    public function __construct($titulo){
        $this->setTitulo($titulo);
  //      $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);

    }




    //—————————— METHODS ——————————\\
    public function play(){
        $this->setReproduzindo(true);
    }

    public function pause(){
        $this->setReproduzindo(false);
    }

    public function like(){
        $this->setCurtidas($this->getCurtidas() + 1);
    }








    //—————————— GET / SET ——————————\\
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($var){
        $this->titulo = $var;
    }

/*    public function getAvaliacao(){
        return $this->avaliacao;
    }



    public function setAvaliacao($var){ //nao vai aqui se foda
        $media = ($this->avaliacao + $var) / $this->views;
        $this->avaliacao = $media;
    }
*/

    public function getViews(){
        return $this->views;
    }

    public function setViews($var){
        $this->views = $var;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCurtidas($var){
        $this->curtidas = $var;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    public function setReproduzindo($var){
        $this->reproduzindo = $var;
    }
}



?>