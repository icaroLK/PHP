<?php

require_once 'includes/login.php';
require_once 'includes/banco.php';
require_once 'includes/funcoes.php';



echo "<header>";
if(empty($_SESSION['user'])){
    echo "<p><a href='user-login.php'>Entrar</a></p>";
}else {
    echo 'Olá, <strong>'. $_SESSION['user']. "</strong>!";
    echo " | <a href='user-edit.php'>Meus dados</a> | ";
    if(is_adm()){
        echo "<a href='user-new.php'>Novo usuário</a> | ";
        echo "Novo jogo | ";
    }
    echo "<br><a href='user-logout.php'>Sair</a>";
};


echo "</header>";

