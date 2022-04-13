<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <?php
        $n1 = isset($_POST["num"]) ? $_POST["num"] : 1;
        $fat = 1;
        $c = $n1;
        echo "Fatorial de $n1 = $n1 ";
        do{
            echo "x $c ";
            $fat *= $c;
            $c--;
        }while($c > 0);
        echo "= $fat <br>";
        echo "<br>O fatorial de $n1 é $fat";
    ?>
</body>
</html>