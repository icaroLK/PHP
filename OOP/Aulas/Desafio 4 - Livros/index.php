<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Livros</title>
    </head>
<body>
    <pre>
        <?php 

            require_once 'Livro.php';
            require_once 'Pessoa.php';

            $pessoas = array();    // $nome, $idade, $sexo
            $livros = array();     // $titulo, $autor, $totpag, $leitor



            $pessoas[0] = new Pessoa("Icaro", 18, "Masculino");
            $pessoas[1] = new Pessoa("Ana", 22, "Feminino");
            $pessoas[2] = new Pessoa("Lucas", 54, "Masculino");
            $pessoas[3] = new Pessoa("Beatriz", 14, "Feminino");
            $pessoas[4] = new Pessoa("Ricardo", 30, "Masculino");
            $pessoas[5] = new Pessoa("Rafael", 24, "Masculino");

        
            $livros[0] = new Livro("Os mitos gregos", "Robert Graves", 535, $pessoas[2]);
            $livros[1] = new Livro("As armas da persuasão", "Robert B Cialdini", 256, $pessoas[1]);
            $livros[2] = new Livro("As 48 leis do Poder", "Robert Greene", 480, $pessoas[0]);
            $livros[3] = new Livro("Making Numbers Count", "Cheap Heath", 245, $pessoas[3]);
            $livros[4] = new Livro("A arte da guerra", "Sun Tzu", 187, $pessoas[5]);
            $livros[5] = new Livro("Sapiens", "Yuval Noah Harari", 843, $pessoas[4]);


    

            $livros[0]->abrir();
            $livros[1]->abrir();
            $livros[2]->abrir();
            $livros[3]->abrir();
            $livros[4]->abrir();
            $livros[5]->abrir();


            $livros[2]->folhear(140);

            echo print_r($livros[2]);








            $livros[0]->detalhes();
            $livros[1]->detalhes();
            $livros[2]->detalhes();
            $livros[3]->detalhes();
            $livros[4]->detalhes();
            $livros[5]->detalhes();

        
        
        
        ?>
    </pre>
</body>
</html>