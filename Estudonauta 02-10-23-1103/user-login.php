<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/stilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Login</title>
    <style>
        div#corpo{
            width: 270px;
            font-size: 13pt;
            margin: auto;
        }

        table td{
            padding: 10px;
        }



    </style>
</head>
<body>
    <?php 
        require_once 'includes/login.php';
        require_once 'includes/banco.php';
        require_once 'includes/funcoes.php';
        // include_once "topo.php";
    
    ?>

<main>
        <div id="corpo">
            <?php
                $u = $_POST['usuario'] ?? null;
                $s = $_POST['senha'] ?? null;

                if($u == null || $s == null){
                    require 'user-login-form.php';
                }else {
                    $q = "Select id_usuario, nome, senha, tipo FROM usuarios WHERE nome = '$u'";
                    $busca = $banco->query($q);
                    if(!$busca){
                        echo msg_erro('Falha ao acessar o banco');
                    }else{
                        // echo msg_sucesso('Banco acessado com sucesso');
                        $objAtual = $busca->fetch_object();
                        if($objAtual == null){
                            echo msg_erro('Usuário não encontrado'); //aqui o banco foi acessado mas o usuário não se encontra la dentro
                        }else { // aqui o usuario foi encontrado na db
                            if(testarHash($s, $objAtual->senha) == 1){
                                echo msg_sucesso('Logado com sucesso');
                                $_SESSION['user'] = $objAtual->nome;
                                $_SESSION['nome'] = $objAtual->nome;
                                $_SESSION['tipo'] = $objAtual->tipo;
                            }else{
                                echo msg_erro('Senha inválida');
                            }
                            
                            
                        }
                     
                    }
                }
            echo voltar();
            ?>


        </div>
    
</body>
</html>













