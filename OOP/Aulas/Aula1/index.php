<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula1</title>
    </head>
    <body>
        <?php 
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;
            
        //    var_dump($c1);
            
            $c1->destampar();
            
            $c1->rabiscar();
            
            echo "<br><hr><br>";
            
            print_r($c1);
            
            echo "<br><hr><br>";
            
            $c2 = new Caneta;
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampar();
            
            print_r($c2);
            
            
            
            
        ?>
    </body>
</html>