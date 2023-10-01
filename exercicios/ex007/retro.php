<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro uiui</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 

            $valor1 = $_GET["valor1"] ?? 0;
            $valor2 = $_GET["valor2"] ?? 0;

        ?>

        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valor1">Valor1:</label>
            <input type="number" name="valor1" id="idvalor1" value="<?php echo $valor1 ?>">

            <label for="valor2">Valor2</label>
            <input type="number" name="valor2" id="idvalor2" value="<?php echo $valor2 ?>">

            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "A soma é " . $soma;
        
        ?>
    </section>

</body>
</html>