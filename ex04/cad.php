<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>

    <section>
        <?php 
            $num = $_GET["numero"];
            print "o numero escolhido foi: ".($num)."<br>";
            print "o seu antecessor é: ".($num-1)."<br>";
            print "o seu sucessor é: ".($num+1)."<br>";

        ?>
        <a href="./index.html">Voltar</a>
    </section>
    
</body>
</html>