<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        
        <p>
            <?php
                $num = $_GET["numero"];
                $ant = $num - 1;
                $suse = $num + 1;
                echo "O numero escolhido foi $num <br>";
                echo "O seu antecessor é $ant <br>";
                echo "O seu sucessor é $suse";
            ?>
        </p>

        <p>
           <a href="javascript:history.go(-1)"> Voltar a Página anterior</a>
        </p>
    </main>
</body>
</html>