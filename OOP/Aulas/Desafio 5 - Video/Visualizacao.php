<?php

require_once 'Usuario.php';
require_once 'Video.php';

class Visualizacao {

    //—————————— ATRIBUTES ——————————\\
    private $espectador;
    private $filme;



    //—————————— CONSTRUCT ——————————\\
    public function __construct($esp, $film){
        $this->espectador = $esp;
        $this->filme = $film;

        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->ganharExp(1);
        $this->espectador->viuMaisUm();







    }



    //—————————— GET / SET ——————————\\
    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($var){
        $this->espectador = $var;
    }

    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($var){
        $this->filme = $var;
    }



    //—————————— METHODS ——————————\\
    







/*
    public function avaliar($var){
        $this->filme->setAvaliacao($var);
    }
*/

}


?>