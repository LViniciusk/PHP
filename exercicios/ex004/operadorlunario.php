<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Lunario</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $op = $_GET["op"];

        echo "Valores reebidos: $n1 e $n2<br>";
        $r = ($op == "s") ? $n1+$n2 : $n1*$n2;

        echo "O resultado é $r";

    
    
    ?>
</body>
</html>