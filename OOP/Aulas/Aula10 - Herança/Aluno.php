<?php

require_once 'Pessoa.php';
Class Aluno extends Pessoa{

    //—————————— ATRIBUTES ——————————\\
    private bool $matricula;
    private string $curso;



    //—————————— CONSTRUCT ——————————\\
    public function __construct(){

    }



    //—————————— METHODS ——————————\\
    public function cancelarMatricula(){
        $this->setMatricula(false);
    }


    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
    }




    //———————————————————————————————\\
    //—————————— GET / SET ——————————\\
    //———————————————————————————————\\


    //—————————— MATR ——————————\\
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($var){
        $this->matricula = $var;
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