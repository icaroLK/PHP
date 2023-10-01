<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    $tot = $_GET["tot"];
    $semana = (int) number_format(($tot / 604800), 0);
    $dias = (int) number_format((($tot % 604800) / 86400), 0);
    $horas = (int) number_format((($tot % 86400) / 3600), 0);
    $min = (int) number_format((($tot % 3600) / 60), 0);
    $seg = (int) number_format(($tot % 60), 0);





    ?>
    <header>
        <h1>Calculadora de tempo</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="tot">Qual é o total de segundos</label>
            <input type="number" name="tot" id="tot" min="0" value="<?=$tot?>">

            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p><?="O valor de <strong>". number_format($tot, 2, ",", ".") ."</strong> segundos equivalem a:"?></p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>
        </ul>
    </section>
    
</body>
</html>