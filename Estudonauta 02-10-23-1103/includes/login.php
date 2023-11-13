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
    $ok = password_verify($senha, $hash);
    return $ok;
};


// echo gerarHash('admin');

echo "<br>";

// $hax = gerarHash('admin');
// echo cripto('admin');

// echo $hax;

$cu = gerarHash('admin');
echo $cu;

// echo testarHash(cripto('admin'), $cu);



