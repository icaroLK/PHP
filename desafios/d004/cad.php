<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas</h1>
    </header>
    <section>
    <?php 

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];



        $real = $_GET["real"];
        $dolar = $real / $cotacao;



        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo numfmt_format_currency($padrao, $real, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrao, $dolar, "USD"). " </strong><br><br><br>"; 


    
    ?>

    <a href="index.html">VOLTAR</a>
    </section>
    
</body>
</html>