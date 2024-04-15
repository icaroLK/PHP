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

    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $nome = $_POST['nome'] ?? null;

    if ($email == null || $senha == null) {
        require 'login.php';
    } else {
        if ($nome != null) {

            $consulta = $banco->query("Select id_usuario, nome_usuario, email, senha, tipo from usuario where nome_usuario = '$nome'");

            if($consulta != null){
                echo "Usuário ja cadastrado.";
                require 'login.php';

            } else{

            

                $query = "insert INTO usuario (nome_usuario, email, senha, tipo) VALUES ('$nome', '$email', '$senha', 'normal');";

                $banco->query($query);
                #era bom fazer uma validação aqui
                echo "<h1>Cadastrado com sucesso</h1>";
                require 'login.php';
            }
        }



        $q = "Select id_usuario, nome_usuario, email, senha, tipo from usuario where email = '$em'";
        $busca = $banco->query($q);

        if (!$busca) {
            echo 'Erro ao acessar o banco';
        } else {
            $objAtual = $busca->fetch_object();


            if ($objAtual == null) {

                echo "Usuário não encontrado";
            } else {
                if (!($sen === $objAtual->senha)) {
                    echo 'Senha errada';
                } else {
                    $_SESSION['usuario'] = $objAtual->usuario;
                    $_SESSION['nome'] = $objAtual->nome;
                    $_SESSION['email'] = $objAtual->email;
                    $_SESSION['tipo'] = $objAtual->tipo;
                    echo 'Logado com sucesso';
                    echo "<p><a href='home.php'>Clique aqui para acessar a home</a></p>";
                }
            }
        }
    }

    ?>








</body>

</html>