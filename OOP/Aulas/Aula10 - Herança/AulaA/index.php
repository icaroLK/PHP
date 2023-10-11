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


            $p1 = new Pessoa();
            $a1 = new Aluno();
            $prof1 = new Professor();
            $f1 = new Funcionario();


            $p1->setIdade(25);
            $a1->setCurso("Eng. Software");
            $prof1->setSalario(4500);
            $prof1->setIdade(43);
            $f1->setSetor("Limpeza");


            print_r($p1);

            echo "<hr>";

            print_r($a1);

            echo "<hr>";

            print_r($prof1);

            echo "<hr>";

            print_r($f1);




        ?>
    </pre>
</body>
</html>