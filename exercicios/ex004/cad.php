<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "sem nome"; // esse "nome" dentro do colchetes ta relacionado ao formulario
            $s = $_GET["snome"] ?? "sem sobrenome";

            echo "É um prazer te conhecer $n $s";

        ?>
        <br>
        <a href="index.html">VOLTAR</a>
    </main>
    
</body>
</html>