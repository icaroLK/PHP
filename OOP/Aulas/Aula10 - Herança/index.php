<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Herança1</title>
    </head>
<body>
    <pre>
        <?php 

            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            require_once 'Visitante.php';
            require_once 'Tecnico.php';
            require_once 'Bolsista.php';


     //       $p1 = new Pessoa();
/*            $v1 = new Visitante();
            $a1 = new Aluno();
            $prof1 = new Professor();
            $f1 = new Funcionario();


      //      $p1->setIdade(25);
            $v1->setIdade(25);
            $a1->setCurso("Eng. Software");
            $prof1->setSalario(4500);
            $prof1->setIdade(43);
            $f1->setSetor("Limpeza");


 //           print_r($p1);
            print_r($v1);

            echo "<hr>";

            print_r($a1);

            echo "<hr>";

            print_r($prof1);

            echo "<hr>";

            print_r($f1);

*/


            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);
            echo "<hr>";

            $b1 = new Bolsista();
            $b1->setMatricula(1112);
            $b1->setNome("Rafondes");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            print_r($b1);
            echo "<hr>";






            
        ?>
    </pre>
</body>
</html>