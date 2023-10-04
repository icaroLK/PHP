<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001</title>
</head>
<body>
    <h1>Teste die</h1>
<!-- 
    <?php $opcao = 1;?>
    <h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?> ">Esse texto foi mexido pelo PHP</h2> -->

    <?php 



    $num = 10;

    switch ($num) {
        case 5:
            echo "É igual a 5";
            break;

        case 10:
            echo "É igual a 10";
            break;

        case 15:
            echo "É igual a 15";
            break;

        default:
            echo "É diferente de 5, 10 ou 15";
    }

    echo "<hr>";

    echo match($num){
        5 => "É igual a 5",
        10 => "É igual a 10",
        15 => "É igual a 15",
        default => "É diferente de 5, 10 ou 15"
    };


    echo "<hr>";
    echo "<hr>";
    echo "<hr>";


    $num = 10;

    switch ($num) {
        case 1:
            echo "É igual a 1";
            break;
        case 4:
        case 5:
        case 6:
            echo "É igual a 4, 5 ou 6";
            break;
        case '10':
            echo "É igual a 10";
            break;

        default:
            echo "É outro número";
    }

    echo "<br>";


    echo match($num){
        1 => "É igual a 1",
        4, 5, 6 => "É igual a 4, 5 ou 6",
        '10' => "É igual a 10",
        default => "É outro valor"
    };


















die();


    $idade = 18;
    if ($idade >= 18){
        echo "Ja atingiu a maioridade";
    } else {
        echo 'Não atingiu a maioridade';
    }



    $nota = 6;
    if ($nota >= 7){
        echo "APROVADO";
    } elseif (5 < $nota) {
        echo 'RECUPERAÇÃO';
    } else {
        echo "REPROVADO";
    }


    $alternativa = 1;
    echo $alternativa == 1 ? 'Sim' : 'Não';

    


    









die();
    $ct = 2;

    $clientes = [

        ['nome' => 'Icaro', 'email' => 'icarolima.k7@gmail.com', 'nacionalidade' => 'Brasil'],
        ['nome' => 'Ana', 'email' => 'anafodase@gmail.com', 'nacionalidade' => 'Brasil'],
        ['nome' => 'Ary', 'email' => 'aryfodase@hotmail.com', 'nacionalidade' => 'Venezuelano'],
    ];

    echo "Nome do cliente $ct: ". $clientes[$ct]['nome'];













die();



$dados = [
	'A' => 20,
	'B' => 30,
	'C' => 40,
	'D' => 50,
	'E' => 60,
];

echo $dados['A'];






    die();
    
    $dados = [1,2,3,4, 30 => 1000];

    echo $dados[7];

    var_dump($dados);


    ?>
    
</body>
</html>

