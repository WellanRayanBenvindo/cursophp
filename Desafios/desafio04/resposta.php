<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php 
        //cotação Vinda da API do banco central do brasil
        $inicio = date("m-d-Y", strtotime("-7 days"));

        $fim = date("m-d-Y");
    
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'.$inicio.'%27&@dataFinalCotacao=%27'.$fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url),true);
    
        //var_dump($dados);
    
        $cotacao = $dados ["value"] [0] ["cotacaoCompra"];
    
        // quantos $$ voce tem ?
            $real = $_GET["din"] ?? 0;

        // equivalencia do dolar 

        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL"). " Equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>