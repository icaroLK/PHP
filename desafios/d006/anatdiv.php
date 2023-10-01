<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANAT DIV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>


    <?php 
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 1;
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;

   
    ?>


    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="1" value="<?php echo $dividendo ?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?php echo $divisor ?>">

            <input type="submit" value="Analisar">
        </form>

        <section>

        <?php 
            echo "<h2>Estrutura da divisão</h2>";
            
            echo "<table class=\"divisao\">
                <tr>
                    <td>$dividendo</td>
                    <td>$divisor</td>
                </tr>
                <tr>
                    <td>$resto</td>
                    <td>$quociente</td>
                </tr>"
        
        
        ?>



        </table>

        </section>

    </main>
    

</body>
</html>