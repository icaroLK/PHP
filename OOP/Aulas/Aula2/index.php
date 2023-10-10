<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula2</title>
    </head>
    <body>
        <pre>
            <?php 
                require_once 'Caneta.php';
                $c1 = new Caneta;
                $c1->modelo = "BIC";
                $c1->cor = "Azul";
      //          $c1->ponta = 0.5;   visibilidade errada ;)
                
                var_dump($c1);
            
            
            
            ?>
        </pre>
    </body>
</html>