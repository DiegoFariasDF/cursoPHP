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
        <h1>Resultado do processamento</h1>
    </header>

    <section>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            print "Olá $nome $sobrenome seja muito bem vindo(a)"
        ?>
    </section>
    
</body>
</html>