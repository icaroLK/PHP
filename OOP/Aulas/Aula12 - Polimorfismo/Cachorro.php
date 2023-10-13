<?php

require_once 'Lobo.php';
Class Cachorro extends Lobo {

    
    public function reagir(string $var){
        if($var == "Comida" || $var == "Passear" || $var == "Good boy"){
            echo "<br>Abanar rabo e latir";
        }else{
            echo '<br>Rosnar';
        }
    }

    public function reagir(int $h, int $m){
        if($h < 12){
            echo "<br>Abanar";
        }else if ($h >= 18){
            echo '<br>Ignorar';
        }else {
            echo "<br>Abanar e latir";
        }
    }

    public function reagir(bool $dono){
        if($dono){
            echo "<br>Abanar";
        }else{
            echo '<br>Rosnar e latir';
        }
    }


    public function reagir(int $idade, float $peso){
        if($idade<5){
            if($peso<10){
                echo "Abanar";
            }else{
                echo 'Latir';
            }
        }else{
            if($peso<10){
                echo "Rosnar";
            }else{
                echo "Ignorar";
            }
        }
    }
}
?>