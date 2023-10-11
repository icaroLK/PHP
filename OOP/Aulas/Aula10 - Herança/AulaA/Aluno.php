<?php

require_once 'Pessoa.php';
Class Aluno extends Pessoa{

    //—————————— ATRIBUTES ——————————\\
    private bool $matr;
    private string $curso;



    //—————————— CONSTRUCT ——————————\\
    public function __construct(){

    }



    //—————————— METHODS ——————————\\
    public function cancelarMatr(){
        $this->setMatr(false);
    }




    //———————————————————————————————\\
    //—————————— GET / SET ——————————\\
    //———————————————————————————————\\


    //—————————— MATR ——————————\\
    public function getMatr(){
        return $this->matr;
    }
    public function setMatr($var){
        $this->matr = $var;
    }



    //—————————— CURSO ——————————\\
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($var){
        $this->curso = $var;
    }

}




?>