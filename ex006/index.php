<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // capturando dados de um formulario retroalimentado

        $valor01 = $_GET ['v1'] ?? 0;
        $valor02 = $_GET ['v2'] ?? 0;  
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 01</label>
            <input type="number" name="v1" id="v1" value="<?=$valor01?>">
            <label for="v2">Valor 02</label>
            <input type="number" name="v2" id="v2" value="<?=$valor02?>">
            <input type="submit" value="somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor01 + $valor02;
            echo "<p> O resultado é <strong> $soma</strong></p>";
        
        ?>

    </section>
</body>
</html>