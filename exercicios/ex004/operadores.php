<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <?php  
        $p = $_GET["p"];
        echo "<h2>Valor recebido: $p</h2>";
        echo "<br>O valor do preço é R$".number_format($p,2,",",".");
        $p += $p * (10/100);
        echo "<br>O preço com 10% de aumento é R$".number_format($p,2,",",".");


    ?>
</body>
</html>