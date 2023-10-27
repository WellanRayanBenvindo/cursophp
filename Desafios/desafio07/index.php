<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário minimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'];
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sl">Salário(R$)</label>
            <input type="number" name="salario" id="salario">
            <input type="submit" value="Calcular">
        </form>
        <section>
            <h1>Resultado final</h1>
            <?php
                

            
            ?>
        </section>
    </main>
</body>
</html>