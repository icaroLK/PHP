<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas</h1>
    </header>
    <section>
    <?php 

        $real = $_GET["real"];
        $dolar = $real * 0.2;

        //----------------------- SEM FORMATAÇÃO

 //       echo "SEM FORMATAÇÃO: R\$ $real equivalem a US\$ $dolar <br> <br> <br>";







        //----------------------- JEITO TRADICIONAL 
//       echo "<p>Seus R\$ ". number_format($real, 2, ",", "."). " equivalem a <strong>US\$ " .number_format($dolar, 2, ",", ".") . " </strong></p>"; 



        //----------------------- FORMATAÇÃO COM INTERNACIONALIZAÇÃO

        // echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>US\$ " . $dolar . " </strong></p>"; 



        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo numfmt_format_currency($padrao, $real, "BRL"); 
        echo " equivale a <strong>";
        echo numfmt_format_currency($padrao, $dolar, "USD");


        echo "</strong><br><br><br>";
    
    ?>
    <a href="index.html">VOLTAR</a>
    </section>
    
</body>
</html>