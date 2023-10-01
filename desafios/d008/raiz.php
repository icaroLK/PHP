<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 0;
        $quad = sqrt($num);
        $cub = pow($num, 1/3);
    
    
    ?>


    <header>
        <h1>Informe um número</h1>
    </header>

    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">

            <input type="submit" value="Calcular raízes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?="<p>Analisando o <strong>número $num</strong>, temos:</p>"?>
        <ul>
            <li><?="Sua raiz quadrada é <strong>". number_format($quad, 2) . "</strong>"?></li>
            <li><?="Sua raiz cúbica é <strong>". number_format($cub, 2). "</strong>"?></li>

        </ul>


    </section>
    
</body>
</html>