<?php



session_start();

if(!isset($_SESSION['user'])){
    $_SESSION['user'] = '';  
    $_SESSION['nome'] = '';
    $_SESSION['tipo'] = '';
}





function cripto($senha){
    $c = '';
    for($pos = 0; $pos < strlen($senha); $pos++){
        $letra =  ord($senha[$pos]) + 1;
        $c .= chr($letra);
    }
    return $c;
}


function gerarHash($senha){
    $cript = cripto($senha);
    $hash = password_hash($cript, PASSWORD_DEFAULT);
    return $hash;
};



function testarHash($senha, $hash){
    $ok = password_verify(cripto($senha), $hash);
    return $ok;
};


function logout(){
    unset($_SESSION['user']);
    unset($_SESSION['nome']);
    unset($_SESSION['tipo']);
}


function is_logado(){
    if(empty($_SESSION['user'])){
        return false;
    } else {
        return true;
    }
}

function is_adm(){
    if($_SESSION['tipo'] == 'admin'){
        return true;
    } else {
        return false;
    }
}

function is_editor(){
    if($_SESSION['tipo'] == 'editor'){
        return true;
    } else {
        return false;
    }
}