<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login AutoChoice</title>
</head>
<body>
    <?php
    require 'funcoes.php';
    
    ?>

    <?php
    
    $e = $_POST['email'] ?? null;
    $s = $_POST['senha'] ?? null;
    $n = $_POST['nome'] ?? null;

    if($e == null || $s == null){
        require 'login.php';
    } else {
        if($n != null){
            $query = "insert INTO usuario (nome_usuario, email, senha, tipo) VALUES ('$n', '$e', '$s', 'normal');";

            $banco->query($query);
            #era bom fazer uma validação aqui
            echo "<h1>Cadastrado com sucesso</h1>";
            
            


            require 'login.php';
        }
        echo '<h1>LOGAAAAAAADO</h1>';

    }
    
    ?>







    
</body>
</html>