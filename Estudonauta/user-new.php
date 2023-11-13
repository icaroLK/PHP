<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/stilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>???</title>
</head>
<body>
    <?php 
        require_once 'includes/login.php';
        require_once 'includes/banco.php';
        require_once 'includes/funcoes.php';
    
    ?>

<main>
        <div id="corpo">
            <?php
            if(!is_adm()){
                echo msg_aviso("Área restrita");
                echo msg_erro("Você não tem permissão para criar um novo usuário");
            }else{
                if(!isset($_POST['usuario'])){
                    require 'user-new-form.php';
                }else{
                    $usuario = $_POST['usuario'] ?? null;
                    $nome = $_POST['nome'] ?? null;
                    $senha = $_POST['senha'] ?? null;
                    $senha2 = $_POST['senha2'] ?? null;
                    $tipo = $_POST['tipo'] ?? null; 
                    
                    if($senha === $senha2){
                        if(empty($usuario) || empty($nome) || empty($senha) || empty($tipo)){
                            echo msg_erro('Todos os dados são obrigatórios');
                        }else{
                            $newpass = gerarHash($senha);


                            $q = "Insert into usuarios(usuario, nome, senha, tipo) VALUES ('$usuario', '$nome', '$newpass', '$tipo')";

                            if($banco->query($q)){
                                echo msg_sucesso("Usuário $usuario cadastrado com sucesso");
                            }else{
                                echo msg_erro('Usuário não cadastrado');
                            }
                        }















                    }else{
                        echo msg_erro('As senhas não batem');
                    }
                }
            }
            
            
            
            
            
            
            
            
            
            ?>


        </div>
    <?=voltar()?>
</body>
</html>