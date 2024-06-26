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
            $num = mt_rand(1,100);
            print "Gerando um numero aleatorio de 1 a 100...<br>";
            print "O numero gerado foi: $num<br>";

        ?>
        <a href="./cad.php">Gerar outro numero</a><br>
        <a href="./index.html">Voltar ao menu inicial</a>
    </section>
    
</body>
</html>