<pre>
<?php 


/*
$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");
*/



$banco = new mysqli("127.0.0.1:3308", "root", "", "bd_game"); //host, usuario, senha, banco de dados // como eu troquei a port padrao do banco de dados, tive que especificar aqui

/*
if($banco->connect_errno){
    echo "<p>Econtrei um erro {$banco->errno} --> {$banco->connect_error}</p>";
    echo "BUCETAAA";
    die();
}; //nao ta funcionando esses verificadores de erro
*/


    $busca = $banco->query("Select * FROM generos");
    while($registro = $busca->fetch_object()){
     /*   print_r($registro);
        echo "<br>";*/

        echo "<p>{$registro->id_genero} — {$registro->genero}</p>";

    }

    echo "<br><br><br><br>";

    $jogos = $banco->query("Select jogos.nome FROM jogos");
    while($uni = $jogos->fetch_object()){
        echo $uni->nome;
        echo "<br>";
    }
    





?>