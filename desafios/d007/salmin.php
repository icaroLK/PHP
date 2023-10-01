<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario minimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
// number_format(1380, 2, ",", ".")
    $salmin = 1380;
    $salario = $_GET["sal"] ?? 0;

    $resultInt = (int) ($salario / $salmin);

 //   $cu = (($salario / $salmin) - $resultInt) * $salmin; 
    $cu = $salario % $salmin;

    
    
    ?>
    <header>
        <h1>Informe seu salário</h1>
    </header>
    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="sal">Salário R$</label>
            <input type="number" name="sal" id="sal" min="0" value="<?=$salario ?>">

            <?php echo "<p>Considerando um salário mínimo de <strong>R\$ ". number_format($salmin, 2, ",", ".") ."</strong></p>" ?>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>

        <h2>Resultado final</h2>
        <?php 
            echo "<p>Quem recebe um salário de R\$ ". number_format($salario, 2, ",", ".") ." ganha <strong>$resultInt salários mínimos</strong> + R\$ ". number_format($cu, 2, ",", ".") .".</p>";
        
        ?>


        

    </section>


    
</body>
</html>