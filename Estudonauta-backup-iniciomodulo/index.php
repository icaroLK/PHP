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
        include_once "topo.php";
    ?>
    

    <main>
        <h1>Escolha seu jogo</h1>
        <?php
        $filtro = $_GET['filtro']?? 'nome';
        $chave = $_GET['pesquisa']?? '';
        ?>





        <div class="barra">
            <a href="index.php?filtro=nome&pesquisa=<?=$chave?>">Nome</a>
            <a href="index.php?filtro=produtora&pesquisa=<?=$chave?>">Produtora</a>
            <a href="index.php?filtro=nota Desc&pesquisa=<?=$chave?>">Nota Alta</a>
            <a href="index.php?filtro=nota&pesquisa=<?=$chave?>">Nota Baixa</a>
            <a href="index.php?filtro=todos">Mostrar todos</a>
        </div>






        <?php  
            $sel = "select * from jogos AS j
            INNER JOIN produtoras AS p on j.id_prod = p.id_prod
            INNER JOIN generos AS g on j.id_genero = g.id_genero";

            if(!empty ($chave)){
                $sel .= " WHERE nome like \"%$chave%\" or produtora like \"%$chave%\" or nota like \"%$chave%\" or genero like \"%$chave%\"";
            };

            switch($filtro){
                case 'todos':
                case 'nome':
                    $sel .= " ORDER BY nome";
                    break;
                case 'produtora':
                    $sel .= " ORDER BY produtora";
                    break;
                case 'nota Desc':
                    $sel .= " ORDER BY nota DESC";
                    break;
                case 'nota':
                    $sel .= " ORDER BY nota";
                    break;
                default:
                    $sel .= " ORDER BY nome";
                    break;
            };

            $totSQL = $banco->query("$sel");
            $qtdGeral = $totSQL->num_rows; 
        ?>






        <form action="index.php" method="get" class="pesquisa">
                <input type="text" name="pesquisa" id="ipesquisa" size="10" maxlength="40">
                <input type="submit" value="Buscar">
        </form> 
    
        <table class="lista">
            <?php 

                for($i = 1; $i <= $qtdGeral; $i++){

                    $objAtual = $totSQL->fetch_object();
                    echo "<tr>";
                        $capa = thumb($objAtual->capa);
                        echo "<td><img src='$capa' class='capa'/></td>";
                        echo "<td><a href='detalhes.php?cod=$objAtual->id_jogo'>$objAtual->nome</a>
                        <br>";
                        echo "<small>$objAtual->genero  ". " - " ."    $objAtual->produtora</small></td>";
                        // $sel = $banco->query("Select g.genero, p.produtora FROM jogos AS j
                        // INNER JOIN produtoras AS p
                        // INNER JOIN generos AS g
                        // ON j.id_genero = g.id_genero AND j.id_prod = p.id_prod
                        // AND j.id_jogo = $objAtual->id_jogo
                        // ORDER BY j.nome")->fetch_object();

                        echo "<td>ADM</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
    <?php include_once 'rodape.php'; ?>
    
</body>
</html>