<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão real / dols</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>$$Dols$$</h1>
    </header>

    <section>
        <?php 
            $incio = date("m/d/Y", strtotime("-7 days"));
            $fim = date("m/d/Y");
        
        
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $incio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            //var_dump($dados);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $reais = $_GET["numero"];


            print "Você tem $".($reais/$cotacao)." Dols<br>";
            print "A cotação atual é de $cotacao<br>";

        ?>
        
        <a href="./index.html">Voltar ao menu inicial</a>
    </section>
    
</body>
</html>