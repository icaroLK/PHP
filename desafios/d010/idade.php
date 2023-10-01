<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
    $anoatual = date("Y");
    
    $nasc = $_GET["nasc"] ?? $anoatual;
    $duv = $_GET["duv"] ?? $anoatual;

    $result = $duv - $nasc;
    
    ?>




    <header>
        <h1>Calculando sua idade</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$anoatual?>" value="<?=$nasc?>">

            <label for="duv">Quer saber a idade em qual ano? (Atualmente estamos em <?="<strong>$anoatual</strong>"?>)</label>
            <input type="number" name="duv" id="duv" min="<?=$nasc?>" value="<?=$duv?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?="<p>Quem nasceu em $nasc vai ter <strong>$result anos</strong> em $duv</p>"?>
    </section>

    
</body>
</html>