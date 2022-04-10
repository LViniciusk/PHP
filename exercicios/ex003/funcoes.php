<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritimeticas</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>
<body>
    <h1>Funções Aritimeticas</h1>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores Recebidos: $v1 e $v2 </h2>";
        echo "O Modulo de $v1 é ".abs($v1);
        echo "<br>O valor de $v1<sup>$v2</sup> é ".pow($v1,$v2);
        echo "<br>A raiz quadrada de $v1 é ".sqrt($v1);
        echo "<br>O numero $v2 arredondado é ".round($v2); 
        //ceil = cima, floor = baixo
        echo "<br>A parte inteira de $v2 é ".intval($v2);
        echo "<br>O valor de $v1 em moeda é R$".number_format($v1,2,",",".")


    
    ?>

</body>
</html>