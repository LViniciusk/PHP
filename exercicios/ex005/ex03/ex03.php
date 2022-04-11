<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex03</title>
    <!--Variaveis-->
    <?php 
        $txt = isset($_GET["t"]) ? $_GET["t"] : "[Texto Generico]";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "black";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor?>;
        }


    </style>
</head>
<body>
    <?php 
    echo "<span class='texto'>$txt</span>";
    ?>
    <br><br>
    <a href="ex03.html">Voltar</a>
</body>
</html>