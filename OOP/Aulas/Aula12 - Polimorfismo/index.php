<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo</title>
    </head>
<body>
    <pre>
        <?php 

            require_once 'Mamifero.php';
            require_once 'Animal.php';
            require_once 'Ave.php';
            require_once 'Peixe.php';
            require_once 'Reptil.php';
            require_once 'Lobo.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Canguru.php';
            require_once 'Arara.php';
            require_once 'Goldfish.php';
            


            
            $m = new Mamifero();
            $m->setNome("Burro");
            $m->setPeso(85.3);
            $m->setIdade(12);
            $m->setMembros(4);
            $m->setCorPelo("Marrom");
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            print_r($m);
            echo "<hr>";



            $r = new Reptil();
            $r->setNome("Largartixa");
            $r->setPeso(4.5);
            $r->setIdade(4);
            $r->setMembros(4);
            $r->setCorEscama("Verde");
            $r->locomover();
            $r->alimentar();
            $r->emitirSom();
            print_r($r);
            echo "<hr>";



            $p = new Peixe();
            $p->setNome("Salmão");
            $p->setPeso(8.4);
            $p->setIdade(1);
            $p->setMembros(0);
            $p->setCorEscama("Rosa");
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            $p->soltarBolha();
            print_r($p);
            echo "<hr>";



            $a = new Ave();
            $a->setNome("Bentivi");
            $a->setPeso(0.6);
            $a->setIdade(2);
            $a->setMembros(2);
            $a->setCorPena("Azul");
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();
            print_r($a);
            echo "<hr>";
            echo "<hr>";
            echo "<hr>";



            $c = new Lobo();
            $c->setNome("Lobin");
            $c->setPeso(8);
            $c->setIdade(4);
            $c->setMembros(4);
            $c->setCorPelo("Branco");
            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $c->enterrraOsso();
            $c->abanarRabo();
            print_r($c);
            echo "<hr>";


            $k = new Canguru();
            $k->setNome("Cangass");
            $k->setPeso(40);
            $k->setIdade(9);
            $k->setMembros(2);
            $k->setCorPelo("Marrom");
            $k->locomover();
            $k->alimentar();
            $k->emitirSom();
            $k->usarBolsa();
            print_r($k);
            echo "<hr>";

        ?>
    </pre>
</body>
</html>