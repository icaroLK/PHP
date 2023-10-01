<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        $p2 = $_GET["p2"] ?? 1;
        $ms = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
    
    ?>





    <header>
        <h1>Médias aritméticas</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

            <label for="v1">Primeiro valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">

            <label for="p1">Primeiro peso</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>">
    
            <label for="v2">Segundo valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">

            <label for="p2">Segundo peso</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">

            <input type="submit" value="Calcular média">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?="Analisando os valores $v1 e $v2:"?>
        <ul>
            <li><?="<strong>Média Aritmética simples</strong> entre os valores é igual a <strong>". number_format($ms, 2). "</strong>"?></li>
            <li><?="<strong>Média Aritmética ponderada</strong> entre os valores é igual a <strong>". number_format($mp, 2). "</strong>"?></li>
        </ul>
    </section>
    
</body>
</html>