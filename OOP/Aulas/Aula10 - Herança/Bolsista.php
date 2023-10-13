<?php

require_once 'Aluno.php';

Class Bolsista extends Aluno {

    //—————————— ATRIBUTES ——————————\\
    private $bolsa;



    //—————————— CONSTRUCT ——————————\\
    public function __construct(){
        
    }



    //—————————— METHODS ——————————\\
    public function renovarBolsa(){
        echo "Bolsa renovada";

    }


  //  @override
    public function pagarMensalidade(){
        echo "<p>O aluno " . $this->getNome() . " é bolsista! Mensalidade paga com desconto</p>";
    }





    //————————————————————————————\\
    //—————————— GET / SET ——————————\\
    //——————————————————————————————\\

    //—————————— BOLSA ——————————\\
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($var){
        $this->bolsa = $var;
    }

}



?>