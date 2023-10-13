<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Videos</title>
    </head>
<body>
    <pre>
        <?php 

            require_once 'AcoesVideo.php';
            require_once 'Pessoa.php';
            require_once 'Usuario.php';
            require_once 'Video.php';
            require_once 'Visualizacao.php';


            $v[0] = new Video("Em busca da casa automática #1");
    //        $v[1] = new Video("Minecraft nf");
    //        $v[2] = new Video("Podpah");

            echo "<h1>Info Video</h1>";
            print_r($v[0]);
   //         print_r($v[1]);
    //        print_r($v[2]);
            echo "<hr>";

            echo "<h1>Info Usuário</h1>";
            $u[0] = new Usuario("Icaro", 18, "Masculino", "Flavin do pneu");
    //        $u[1] = new Usuario("Ana", 16, "Feminino", "naJulhadas");
            print_r($u[0]);
    //        print_r($u[1]);

            echo "<hr>";

            $vis[0] = new Visualizacao($u[0], $v[0]);
  /*          $vis[1] = new Visualizacao($u[0], $v[0]);
            $vis[2] = new Visualizacao($u[0], $v[0]);
            $vis[3] = new Visualizacao($u[0], $v[0]);
            $vis[4] = new Visualizacao($u[0], $v[0]);
            $vis[5] = new Visualizacao($u[0], $v[0]);
            $vis[6] = new Visualizacao($u[0], $v[0]);
            $vis[7] = new Visualizacao($u[0], $v[0]);
            $vis[8] = new Visualizacao($u[0], $v[0]);
            $vis[9] = new Visualizacao($u[0], $v[0]);
            $vis[10] = new Visualizacao($u[0], $v[0]);
    */


    //        $vis[1] = new Visualizacao($u[0], $v[2]);
    //        $vis[2] = new Visualizacao($u[1], $v[1]);

     //       $vis[0]->avaliar();

            echo "<h1>Visualização</h1>";
            print_r($vis[0]);
            echo "<hr>";
    //        print_r($vis[1]);
    //        echo "<hr>";
    //        print_r($vis[2]);

        


        
        ?>
    </pre>
</body>
</html>