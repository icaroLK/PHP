<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gerando números aleatórios</h1>
    </header>
    <section>
        <?php 
    
            $min = 0;
            $max = 100;
            $aleat = mt_rand($min, $max);

            echo "<p>Gerando um número aleatório entre $min e $max... <br>O valor gerado foi <strong>$aleat</strong></p>";
        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </section>
    
</body>
</html>