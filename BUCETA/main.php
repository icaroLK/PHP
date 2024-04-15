<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoChoice</title>
</head>
<body>
    <?php
    require 'funcoes.php';
    
    ?>

    <?php
    
    $resultado = $banco->query(" select * FROM carro;");

    $qtd = $resultado->num_rows;

    for($i = 1; $i <= $qtd; $i++){
        $objAtual = $resultado->fetch_object();

        echo "<table>";
        echo "<tr>";
        echo "<td>$objAtual->categoria</td>";
        echo "<td>$objAtual->marca</td>";
        echo "<td>$objAtual->modelo</td>";
        echo "</tr>";
        

    }
       
    
    
    
    
    
    
    ?>










    
</body>
</html>