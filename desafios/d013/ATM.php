<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    $valor = $_GET["valor"] ?? 0;
    $resto = $valor;

    $cem = (int) ($resto / 100);
    $resto %= 100;

    $cinq = (int) ($resto / 50);
    $resto %= 50;

    $dez = (int) ($resto / 10);
    $resto %= 10;

    $cinc = (int) ($resto / 5);
    $resto %= 5;




    ?>

    <header>
        <h1>Kucha's Bank</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor deseja sacar? (R$)</label>
            <input type="number" name="valor" id="valor" min="0" step="5" value="<?=$valor?>">

            <input type="submit" value="Sacar">
    
    
        </form>
    </main>
    <section>
        <h2>Saque de R$ <?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai pagar as seguintes notas</p>
        <ul>
            <li>R$ 100 → <?=$cem?> vezes</li>
            <li>R$ 50 → <?=$cinq?> vezes</li>
            <li>R$ 10 → <?=$dez?> vezes</li>
            <li>R$ 5 → <?=$cinc?> vezes</li>
        </ul>

    </section>
    
</body>
</html>