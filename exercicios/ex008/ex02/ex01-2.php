<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex01-2</title>
</head>
<body>
    <?php
        $c = 1;
        while ($c <=5){
            $v = $_POST["v$c"];
            echo "Valor $c: $v<br>";
            $c++;
        }
    ?><br>
    <a href="ex01.php">Voltar</a>
</body>
</html>