<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>Testando PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        print "Hoje é dia ".date("d/M/Y")."<br>";
        print "E a hora atual é ".date("g:i:s")
    ?>
    
</body>
</html>