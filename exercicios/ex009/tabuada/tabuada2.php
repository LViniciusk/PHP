<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php 
        $n1 = isset($_POST["num"]) ? $_POST["num"] : 1;
        $c = 1;
        echo "<h1>Mostrando a tabuada de $n1</h1>";
        do{
            echo "$n1 x $c = ".($n1*$c)."<br>";
            $c++;
        }while($c <=10);
    
    ?><br><br>
    <a href="tabuada.php">Voltar</a>
</body>
</html>