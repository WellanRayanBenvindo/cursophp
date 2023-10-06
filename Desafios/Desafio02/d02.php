<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando um numero aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatórios</h1>
        <p>
            <?php 
                $min = 0;
                $max = 500;

                $num = mt_rand($min, $max);

                echo "Gerando um numero aleatorio entre $min e $max . <br>
                O numero gerado foi <strong> $num </strong>";
            
            ?>
            
        </p>

        <button onclick="javascript:document.location.reload()"> &#x1f504; Denovo</button>
    </main>
</body>
</html>