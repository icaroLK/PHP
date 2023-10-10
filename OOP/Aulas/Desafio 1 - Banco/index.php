<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Kucha's Bank</title>
    </head>
    <body>
        <pre>
            <?php 
            echo "<br>";

            require_once 'ContaBanco.php';
            
            
            $p1 = new ContaBanco("CC");
            $p1->abrirConta();
            $p1->setDono("Lucas");
            $p1->setNumConta(1111);
            $p1->depositar(300);
            $p1->pagarMensal();
            $p1->fecharConta();
            $p1->sacar(338);
            $p1->fecharConta();
            
            
            print_r($p1);
            
            
            
            echo "<br><hr><br>";
            
            
            $p2 = new ContaBanco("CP");
            $p2->abrirConta();
            $p2->setDono("Ana");
            $p2->setNumConta(2222);
            $p2->depositar(500);
            $p2->sacar(100);
            $p2->pagarMensal();
            $p2->sacar(1000);
            $p2->sacar(530);
            $p2->fecharConta();            
            
            print_r($p2);

            ?>
        </pre>
    </body>
</html>