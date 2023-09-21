<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body{
            background-color: lightgray;
        }
        main{
            background-color: lightskyblue;
            display: block;
            border: 1px solid black;
            border-radius: 10px;
            width: 400px;
            height: 200px;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            margin: auto;
        }
        h1{
            color: blue;
        }
        h1:hover{
            color: yellowgreen;
        }
        p{
            font-size: 30px;
            color: blue;
        }
        p:hover{
            color: red;
        }
        
    </style>
</head>
<body>
    <main>
    <h1>Exemplo de php</h1>
    <p>
    <?php 
        date_default_timezone_set("America/Sao_paulo");
        echo "hoje é dia ". date("d/M/Y")."<br>"; 
        echo "São ". date("G:i:s")
    
    ?>
    </p>
    </main>
</body>
</html>