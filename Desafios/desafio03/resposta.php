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
        //cotação copiada do google dia 07/10/2023
            $cotação = 5.15;
        // quantos $$ voce tem ?
            $real = $_GET["din"] ?? 0;

        // equivalencia do dolar 

        $dolar = $real / $cotação;


            //echo "Seus R\$" . number_format($real,2 ,",", ".") . "equivalem a US\$" . number_format($dolar, 2);

            //Formatação de moedas com internacionalização

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL"). " Equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>