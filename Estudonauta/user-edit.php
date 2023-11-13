<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/stilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Ediçaõ de dados do usuário</title>
</head>
<body>
    <?php 
        require_once 'includes/login.php';
        require_once 'includes/banco.php';
        require_once 'includes/funcoes.php';

        $q = "Select usuario, nome, senha, tipo from usuarios where usuario='". $_SESSION['user']. "'";

        $busca = $banco->query($q);
        $objAtual = $busca->fetch_object();
    
    ?>


<main>
        <div id="corpo">
            <?php
            if(!is_logado()){
                echo msg_erro('Você não esta logado');
                echo msg_aviso("Clique <a href='user-login.php'>aqui</a> para fazer login");
            } else {
                if(!isset($_POST['usuario'])){
                    include 'user-edit-form.php';
                }else{

                    $newNome = $_POST['nome'] ?? null;
                    $oldSenha = $_POST['senha1'] ?? null;
                    $newSenha = $_POST['senha2'] ?? null;
                    $newSenha2 = $_POST['senha3'] ?? null;

                    if(!testarHash($oldSenha, $objAtual->senha)){    
                        echo msg_erro('Digite corretamente sua senha atual para poder atualizar seus dados');
                    }else{

                        if(empty($newSenha)){
                            $q = "Update usuarios set nome = '$newNome' WHERE usuario = '" . $_SESSION['user']. "'";
                            
                            $banco->query($q);

                            echo msg_sucesso('Nome atualizado com sucesso');

                        }else{

                            if(!($newSenha === $newSenha2)){
                                echo msg_erro('As duas senhas novas nao correspondem');
                            }else{
                                $definitsenha = gerarHash($newSenha);


                                $q = "Update usuarios set nome = '$newNome', senha = '$definitsenha' WHERE usuario = '" . $_SESSION['user']. "'";
                                
                                $banco->query($q);

                                echo msg_sucesso('Dados atualizados com sucesso.');
                                logout();
                                echo msg_aviso("Por segurança, realize o <a href='user-login.php'>login</a> novamente");



                            }
                    }


                    }












                    


                }
                

            }
            
            
            
            
            
            ?>
            

            <?= voltar()?>
        </div>

        <?php require_once 'rodape.php'?>
    
</body>
</html>