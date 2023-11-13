<?php

function thumb($arq){
    $caminho = "fotos/$arq";
    if(is_null($caminho) || !file_exists($caminho)){
        return "fotos/indisponivel.png";
    }else {
        return $caminho;
    }
};


function voltar(){
    return "<a href='index.php'><span class='material-symbols-outlined'>arrow_back</span></a>";
};


function msg_sucesso($m){
    $resp = "<div class='msg sucesso'><span class='material-symbols-outlined'>done</span>$m</div>";
    return $resp;
}

function msg_aviso($m){
    $resp = "<div class='msg aviso'><span class='material-symbols-outlined'>warning</span>$m</div>";
    return $resp;
}

function msg_erro($m){
    $resp = "<div class='msg erro'><span class='material-symbols-outlined'>error</span>$m</div>";
    return $resp;

}

function logout(){
    unset($_SESSION['user']);
    unset($_SESSION['nome']);
    unset($_SESSION['tipo']);
}
