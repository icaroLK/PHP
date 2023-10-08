<?php 


/*
$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");
*/



$banco = new mysqli("127.0.0.1:3308", "root", "", "bd_game"); //host, usuario, senha, banco de dados // como eu troquei a port padrao do banco de dados, tive que especificar aqui
if($banco->connect_errno){
    echo "<p>Econtrei um erro $banco->errno --> $banco->connect_error</p>";
    echo "BUCETAAA";
    die();
}; //nao ta funcionando esses verificadores de erro


    $busca = $banco->query("Select * FROM generos");

    if(!$busca){
        echo "Deu merdaaqui"; //nao ta funcionando esses verificadores de erro
    } else {
        while($reg = $busca->fetch_object()){ // pega tudo de um objeto e coloca em outro objeto (é só uma atribuição de variável normal mas com objetos)
        print_r($reg);
        echo "<br>";
        }
    }; 




?>