<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $preco = $_GET["preco"] ?? 0;
        $reaj = $_GET["reaj"] ?? 0;
        $final = $preco + ($reaj / 100 * $preco) ;
    
        
    
    ?>


    <header>
        <h1>Reajustador de preços</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0" value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste? (<?= $reaj ?>%)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" value="<?=$reaj?>" step="5">

            <input type="submit" value="Reajustar">
    
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <?php 
            echo "<p>O produto que custava R\$ ". number_format($preco, 2) .", com <strong>" . $reaj. "% de aumento</strong> vai custar<strong> R\$ " . number_format($final, 2) . "</strong> a partir de agora.</p>"
        
        
        ?>
    </section>
    
</body>
</html>