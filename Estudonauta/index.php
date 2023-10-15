<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games catalog</title>
    <link rel="stylesheet" href="estilos/stilo.css">
</head>
<body>
    <?php 
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    ?>
    

    <main>
        <h1>Escolha seu jogo</h1>
        <table class="lista">

            <?php 

            


        //    $penis = $total->fetch_object()->qtd;
        //    echo "$total";

            

            for($i = 1; $i <= $qtdGeral; $i++){

                $objAtual = $totSQL->fetch_object();
                echo "<tr>";
                    $capa = thumb($objAtual->capa);
                    echo "<td><img src='$capa' class='capa'/></td>";
                    echo "<td><a href='detalhes.php?cod=$objAtual->id_jogo'>$objAtual->nome</a></td>";
                    echo "<td>$objAtual->produtora</td>";
              //      echo "<td>$objAtual->genero</td>";
                echo "</tr>";

            }

            
            ?>


            
        </table>
    </main>
    
</body>
</html>