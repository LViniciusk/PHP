<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritimeticos</title>
</head>
<body>
    <h1>Operações Aritimeticas</h1>
    <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores Recebidos: $n1 e $n2 </h2>";
        echo "A some entre $n1 e $n2 é ".($n1+$n2);
        echo "<br>A subtração entre $n1 e $n2 é ".($n1-$n2);
        echo "<br>A multiplicação entre $n1 e $n2 é ".($n1*$n2);
        echo "<br>A divisão entre $n1 e $n2 é ".($n1/$n2);
        echo "<br>O resto da divisao entre $n1 e $n2 é ".($n1%$n2);
    ?>
</body>
</html>