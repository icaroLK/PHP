<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula3</title>
    </head>
    <body>
        <pre>
            <?php 

            require_once 'Caneta.php';
            $c1 = new Caneta("BIC", "Verde", 0.5);
            $c2 = new Caneta("Faber Castel", "Preto", 0.7);
            $c3 = new Caneta("Hasbro", "Azul", 1);
            
           
            print_r($c1);
            print_r($c2);
            print_r($c3);
            

            ?>
        </pre>
    </body>
</html>