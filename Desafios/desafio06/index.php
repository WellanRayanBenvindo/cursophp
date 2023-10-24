<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
            $valor01 = $_GET['num01'] ?? 0;
            $valor02 = $_GET['num02'] ?? 0;
        
        ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
       
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num01">Dividendo:</label>
            <input type="number" name="num01" id="num01">
            <label for="num02">Divisor:</label>
            <input type="number" name="num02" id="num02">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <?php
            $divisao = $valor01 / $valor02;
            $resto = $valor01 % $valor02;

            echo "O dividendo é $valor01 <br>";
            echo "O divisor é $valor02 <br>";
            echo "O quociente é $divisao <br>";
            echo "O resto é $resto <br>";
        
        ?>

    </section>
</body>
</html>