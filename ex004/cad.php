<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resutado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento !!!</h1>
    </header>

    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Digite o nome";
            $sobrenome = $_GET["sobrenome"] ?? "Digite o sobrenome";

            echo "<p> É um prazer te conhecer $nome $sobrenome este é o meu site !!! </p>";
        ?>

        <p>
           <a href="javascript:history.go(-1)"> Voltar a Página anterior</a>
        </p>
    </main>
</body>
</html>