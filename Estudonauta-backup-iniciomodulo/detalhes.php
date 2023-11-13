<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/stilo.css">
    <title>Detalhes</title>
</head>
<body>
    <?php 
        require_once 'includes/banco.php';
        require_once 'includes/funcoes.php';
        include_once "topo.php";
    
    ?>

<main>
        <div id="corpo">
            <?php
                $c = $_GET['cod'] ?? 0;
    
                 // SE DER MERDA MUDA AUQI O NOME DO OBJATUAL
                $objAtual = $banco->query("Select * FROM jogos AS j, produtoras AS p, generos AS g WHERE j.id_prod = p.id_prod AND j.id_genero = g.id_genero AND id_jogo = $c")->fetch_object();


                // Select * FROM jogos AS j, produtoras AS p, generos AS g WHERE j.id_prod = p.id_prod AND j.id_genero = g.id_genero AND id_jogo = $c
    
            ?>
    
            <h1>Detalhes do jogo <?=$objAtual->nome?></h1>
            <table class="detalhes">
                <?php 
                    $t = thumb($objAtual->capa);
                    echo "<tr><td rowspan='3'> <img src='$t' class='full'/></td>";
                    echo "<td><h2>$objAtual->nome</h2></td>";
                    echo "<td>Nota: $objAtual->nota / 10</td>";
                    echo "<tr><td>$objAtual->descricao</td>";
                    echo "<tr><td>$objAtual->produtora</td>";

                ?>
            </table>
            <a href="index.php"><img src="icones/icoback.png" /></a>
    
    
    
    
        </div>
</main>
<?php include_once 'rodape.php'; ?>


</body>
</html>