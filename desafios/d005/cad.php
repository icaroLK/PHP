<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <section>
    <?php 

    $num = $_GET["num"] ?? 0;

    $int = (int) $num;
    $frac = $num - $int;



    echo "<p>Analisando o número: <strong>" . number_format($num, 3, ",", ".") . "</strong></p>";
    echo "<p>Parte inteira: ". number_format($int, 0, ",", ".") . "</p>";
    echo "<p>Parte fracionária: ". number_format($frac, 3, ",", ".") . "</p>";



    
    echo "<br>";
    ?>

    <a href="index.html">VOLTAR</a>
    </section>
    
</body>
</html>