<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
    <?php 
    
    $num = $_GET["num"];

    $ant = $num - 1;
    $suc = $num + 1;

    echo "
    <p>O numero escolhido foi <strong>$num</strong></p>
    <p>O seu antecessor é $ant</p>
    <p>O seu sucessor é $suc</p>";
    ?>

    <a href="index.html">VOLTAR</a>
    </section>
    
</body>
</html>