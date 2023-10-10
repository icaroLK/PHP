<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>UFC</title>
    </head>
    <body>
        <pre>
            <?php 
           
            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            $lut = array();
            
            $lut[0] = new Lutador
                    ("Pretty Boy","França",
                    30, 1.75, 68.9,
                    11, 2, 1);            
            
            $lut[1] = new Lutador(
                    "Putscript", "Brasil",
                    29, 1.68, 57.8,
                    14, 2, 3
            );
            
            $lut[2] = new Lutador(
                    "Snapshadow", "EUA",
                    35, 1.65, 80.9,
                    12, 2, 1
            );
            
            $lut[3] = new Lutador(
                    "Dead Code", "Austrália",
                    28, 1.93, 81.6,
                    13, 0, 2
            );
            
            $lut[4] = new Lutador(
                    "Ufocobol", "Brasil",
                    37, 1.70, 119.3,
                    5, 4, 3
            );
            
            $lut[5] = new Lutador(
                    "Nerdaard", "EUA",
                    30, 1.81, 105.7,
                    12, 2, 4
            );
            
       /*     $lut[2]->apresentar();
            $lut[3]->apresentar();*/
            echo "<br><br><br><br><br><br>";
            
            
            $UEC01 = new Luta();
            $UEC01->marcarLuta($lut[0], $lut[1]);
            $UEC01->lutar();
            
            echo "<br><br><br><br><br><br>";
      /*      $lut[0]->status();
            $lut[1]->status();*/
            
            
            
            

            ?>
        </pre>
    </body>
</html>